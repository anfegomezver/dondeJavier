<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'documento' => $this->faker->unique()->regexify('[0-9]{8}'), // Documento único y con formato numérico
            'correo' => $this->faker->unique()->safeEmail(),
            'direccion' => $this->faker->address(),
            'numero_telefono' => $this->faker->phoneNumber(),
            'fecha_nacimiento' => $this->faker->date(), // Fecha de nacimiento aleatoria
            'registrado_por' => User::inRandomOrder()->value('id') ?? User::factory(),
            'estado_civil' => $this->faker->randomElement(['Soltero', 'Casado', 'Divorciado', 'Viudo']), // Valor aleatorio para estado civil
        ];
    }
}
