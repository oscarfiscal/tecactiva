<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_producto' => $this->faker->name,
            'descripcion' => $this->faker->text,
            'precio' => $this->faker->randomFloat(2, 0, 100),
            'estado' => $this->faker->randomElement(['1', '0']),
            'fecha_publicacion' => $this->faker->dateTimeBetween('-1 years', '+1 years'),
        ];
    }
}
