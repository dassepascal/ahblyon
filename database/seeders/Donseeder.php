<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Dons;
use Illuminate\Database\Seeder;

class Donseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i = 0 ; $i < 2 ;$i++){
                  Dons::create([
                  'title' => $faker->sentence(),

                   'content'=> $faker->text($maxNbChars = 600),

                  ]);
              }

    }
}
