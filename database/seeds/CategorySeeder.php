<?php

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
        $data = [
            [
                'category'=> "Menswear",
                'description'=>'All Menswear items',
            ],
            [
                'category'=> "Jewellery",
                'description'=>'All jewellery items',
            ],
            [
                'category'=> "Grocery",
                'description'=>'All Grocery items',
            ],
            [
                'category'=> "Lightning",
                'description'=>'All Lightning items',
            ],
            [
                'category'=> "Pet Supplies",
                'description'=>'Pet Supplies',
            ],
        ];
        foreach($data as $c){
            \App\Category::create($c);
        }
    }
}
