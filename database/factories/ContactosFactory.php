<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contactos>
 */
class ContactosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'apellido'=>$this->faker->lastName(),
            'correo_electronico'=>$this->faker->email(),
            'telefono'=>$this->faker->phoneNumber(),
        ];
    }
}
