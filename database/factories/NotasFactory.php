<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Notas>
 */
class NotasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'texto'=>$this->faker->sentence(),
            'fecha'=>$this->faker->dateTime(),
            'contacto_id'=>$this->numberBetween(1,100),

        ];
    }
}
