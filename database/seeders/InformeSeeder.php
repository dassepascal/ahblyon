<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Informe;
use Illuminate\Database\Seeder;

class InformeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0 ; $i < 4 ;$i++) {
            Informe::create([
            'title' => $faker->sentence(),
            'content'=> $faker->text($maxNbChars = 600),
            ]);
        }
    }
}
