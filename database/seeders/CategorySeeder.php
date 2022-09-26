<?php

namespace Database\Seeders;

use Faker\Factory;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = ['gauche','droite'];

      for($i = 0 ; $i < count($categories) ;$i++){
                Category::create([
               'label'=>$categories[$i]

                ]);
            }
    }
}
