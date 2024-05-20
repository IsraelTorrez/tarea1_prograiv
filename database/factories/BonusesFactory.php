<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BonusesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name'=> $this->faker->word(),
           'description'=>$this->faker->paragraph(1),
           'Bonus_type'=>$this->faker->word(),
           'amount' => $this->faker->randomFloat(2, 10, 1000), // Monto con 2 decimales, entre 10 y 1000
            'exchange_rate' => $this->faker->randomElement(['bs', 'usd']), // Tipo de cambio: 'bs' o 'usd'
            'exchange_rate' => $this->faker->boolean() ? 1 : 0 // Estado: 1 (activo) o 0 (desactivo)
        
        ];
    }
}
