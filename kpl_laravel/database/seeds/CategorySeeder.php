<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'category_name' => 'Fuel Dispenser'
            ],
            [
                'category_name' => 'Gasoline Hanging Hardware'
            ],
            [
                'category_name' => 'Hose'
            ],
            [
                'category_name' => 'Hydraulic Hose Fittings'
            ],
            [
                'category_name' => 'Adaptors'
            ],
            [
                'category_name' => 'Ferrule'
            ],
            [
                'category_name' => 'Pneumatic Fittings'
            ],
            [
                'category_name' => 'Bandimex'
            ],
            [
                'category_name' => 'Crimping Machine'
            ],
            [
                'category_name' => 'Oil & Lubricant'
            ],
            ];
            foreach ($category as $key => $value) {
                Category::create($value);
            }
    }
}
