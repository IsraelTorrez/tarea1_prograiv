<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name'=>$this->faker->name,
            'description'=>$this->faker->paragraph(1),
            'address'=>$this->faker->streetAddress,
            'email'=>$this->faker->safeEmail,
            'phone_number'=>$this->faker->word,
            'nit'=>$this->faker->word,
            'estado'=>$this->faker->boolean
        ];
    }
}
