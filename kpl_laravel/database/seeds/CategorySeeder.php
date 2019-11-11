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
                    'category_name' => 'Soap',
                ],
                [
                    'category_name' => 'Shampoo',
                ],
                [
                    'category_name' => 'Toothpaste',
                ],
                [
                    'category_name' => 'Clothings',
                ],
                [
                    'category_name' => 'Shoes',
                ],
                [
                    'category_name' => 'Restaurant',
                ],
                [
                    'category_name' => 'Gadgets',
                ],
                [
                    'category_name' => 'Cafe',
                ]
            ];
            foreach ($category as $key => $value) {
                Category::create($value);
            }
    }
}
