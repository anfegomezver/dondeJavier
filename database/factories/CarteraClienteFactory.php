<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Factura;
use App\Models\CarteraCliente;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CarteraCliente>
 */
class CarteraClienteFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $factura = Factura::where('estado', 'Pendiente')
            ->whereHas('carteraClientes')
            ->inRandomOrder()
            ->first();

            if ($factura) {
                $saldoPendiente = $factura->monto_total - $factura->carteraClientes->sum('abono');
    
                return [
                    'id_factura' => $factura->id,
                    'abono'      => $saldoPendiente, // se toma el saldo pendiente
                    'fecha'      => now(),
                ];
            }
    
            // Si no se encontró factura, devolvemos un array vacío para evitar crear el abono.
            return [];
    }

    public function configure()
    {
        return $this->afterCreating(function (CarteraCliente $cartera) {
            // Recuperamos la factura asociada al abono recién creado
            $factura = $cartera->factura;

            // Calculamos el total abonado en esta factura
            $totalAbonado = $factura->carteraClientes()->sum('abono');

            // Si el total abonado es igual o supera el monto total, actualizamos el estado de la factura a "Pagada"
            if ($totalAbonado == $factura->monto_total) {
                $factura->update(['estado' => 'Pagada']);
            }
        });
    }
}
