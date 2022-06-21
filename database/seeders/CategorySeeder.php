<?php

namespace Database\Seeders;

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
        \App\Models\Category::factory(5)->create();

        // $categories = ['categorie 1','categorie 2','categorie 3'];
        // for ($i = 0 ;$i < count($categories) ;$i++) {
        //     Category::create([
        //           'label'=>$categories[$i]
        //           ]);
        // }
    }
}
