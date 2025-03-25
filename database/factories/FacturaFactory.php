<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
use App\Models\Formapago;
use App\Models\User;
use App\Models\Factura;
use App\Models\CarteraCliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Factura>
 */
class FacturaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $estado = $this->faker->randomElement(['Pagada', 'Pendiente']);
        $montoTotal = round($this->faker->numberBetween(1000, 100000) / 50) * 50;
        $fecha = $this->faker->dateTimeBetween('-2 years', 'now')->format('Y-m-d');

        return [
            'id_cliente' => $this->faker->boolean(70) && Cliente::count() > 0 
                ? Cliente::inRandomOrder()->value('id') 
                : Cliente::factory(),
                
            'fecha' => $fecha,
            'estado' => $estado,
            'monto_total' => $montoTotal,
            'id_forma_pago' => Formapago::factory(),
            'registrado_por' => User::inRandomOrder()->value('id') ?? User::factory(),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Factura $factura) {
            if ($factura->estado === 'Pendiente') {
                $abono = round($this->faker->numberBetween(500, $factura->monto_total - 50) / 50) * 50;

                CarteraCliente::factory()->create([
                    'id_factura' => $factura->id,
                    'abono' => $abono,
                    'fecha' => $factura->fecha
                ]);
            }
        });
    }

}
