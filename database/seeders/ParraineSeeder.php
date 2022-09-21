<?php

namespace Database\Seeders;

use App\Models\parraine;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ParraineSeeder extends Seeder
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
            Parraine::create([
            'title' => $faker->sentence(),
            'content'=> $faker->text($maxNbChars = 600),
            ]);
        }
    }
}
