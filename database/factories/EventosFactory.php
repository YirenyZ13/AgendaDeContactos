<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Eventos>
 */
class EventosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'titulo'=>$this->faker->sentence(),
            'descripcion'=>$this->faker->paragraph(),
            'fecha_inicio'=>$this->faker->dateTimeBetween()->format('Y-m-d H:i:s'),
            'fecha_fin'=>$this->faker->dateTimeBetween()->format('Y-m-d H:i:s'),
            'contacto_id'=>$this->faker->numberBetween(1,100),

        ];
    }
}
