<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //$this->call(CategoryTableSeeder::class);
        \App\Models\Category::factory(10)->create();
        \App\Models\Provider::factory(30)->create();
<<<<<<< HEAD
        \App\Models\Bonuses::factory(30)->create();
=======
>>>>>>> 7aee0c84e93f0ea5fff2b9a30b3da723ff7f62b7
    }
}
