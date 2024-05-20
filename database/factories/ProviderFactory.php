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
<<<<<<< HEAD

             'name'=> $this->faker->word(),
            'description'=> $this->faker->paragraph(1),
            'address'=> $this->faker->streetAddress,
            'email'=> $this->faker->safeEmail,
            'phone_number'=> $this->faker->word(),
            'nit'=> $this->faker->word(),
            'estado'=> $this->faker->boolean
=======
            //
            'name'=>$this->faker->name,
            'description'=>$this->faker->paragraph(1),
            'address'=>$this->faker->streetAddress,
            'email'=>$this->faker->safeEmail,
            'phone_number'=>$this->faker->word,
            'nit'=>$this->faker->word,
            'estado'=>$this->faker->boolean
>>>>>>> 7aee0c84e93f0ea5fff2b9a30b3da723ff7f62b7
        ];
    }
}
