<?php

namespace Database\Seeders;

use App\Models\Category;
use Faker\Factory;
use App\Models\Photo;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for($i=0;$i< 10;$i++){
            Photo::create([
                'name'=>$faker->sentence(),
                'path'=>$faker->imageUrl($width = 640, $height = 480),
                'category_id'=>Category::inRandomOrder()->first()->id,
            ]);
        }

    }
}
