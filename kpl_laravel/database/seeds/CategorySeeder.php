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
                'category_name' => 'Hydraulic Fittings'
            ],
            [
                'category_name' => 'Hydraulic Hose'
            ],
            [
                'category_name' => 'Suction Discharge Hose'
            ],
            [
                'category_name' => 'Pneumatic Fittings'
            ],
            [
                'category_name' => 'Hydraulic Adaptors'
            ],
            [
                'category_name' => 'Ferrule, Plug & Cap'
            ],
            // [
            //     'category_name' => 'Flange'
            // ],


        ];

        foreach ($category as $key => $value) {
            Category::create($value);
        }
    }
}
