<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formapago>
 */
class FormapagoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'metodo_pago' => $this->faker->randomElement(['tarjeta_de_credito', 'efectivo', 'transferencia']),
            'detalles_pago' => $this->faker->regexify('[A-Z0-9]{10}')
        ];
    }
}
