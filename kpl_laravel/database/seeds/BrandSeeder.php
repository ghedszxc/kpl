<?php

use Illuminate\Database\Seeder;
use App\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand = [
            [
                'brand_name' => 'Safeguard',
                'category_id' => '1'
            ],
            [
                'brand_name' => 'Dove',
                'category_id' => '1'
            ],
            [
                'brand_name' => 'Silka',
                'category_id' => '1'
            ],

            [
                'brand_name' => 'Head & Shoulder',
                'category_id' => '2'
            ],
            [
                'brand_name' => 'Clear',
                'category_id' => '2'
            ],
            [
                'brand_name' => 'Tresemme',
                'category_id' => '2'
            ],
            [
                'brand_name' => 'Palmolive',
                'category_id' => '2'
            ],
            [
                'brand_name' => 'Vaseline',
                'category_id' => '2'
            ],

            [
                'brand_name' => 'Colgate',
                'category_id' => '3'
            ],
            [
                'brand_name' => 'Close up',
                'category_id' => '3'
            ],
            
            [
                'brand_name' => 'Bench',
                'category_id' => '4'
            ],
            [
                'brand_name' => 'H&M',
                'category_id' => '4'
            ],
            [
                'brand_name' => 'Uniqlo',
                'category_id' => '4'
            ],
            [
                'brand_name' => 'Tribal',
                'category_id' => '4'
            ],
            [
                'brand_name' => 'Oxygen',
                'category_id' => '4'
            ],

            [
                'brand_name' => 'Nike',
                'category_id' => '5'
            ],
            [
                'brand_name' => 'Jordan',
                'category_id' => '5'
            ],
            [
                'brand_name' => 'Vans',
                'category_id' => '5'
            ],
            [
                'brand_name' => 'Converse',
                'category_id' => '5'
            ],

            [
                'brand_name' => 'Jollibee',
                'category_id' => '6'
            ],
            [
                'brand_name' => 'Mcdonalds',
                'category_id' => '6'
            ],
            [
                'brand_name' => 'KFC',
                'category_id' => '6'
            ],

            [
                'brand_name' => 'Apple',
                'category_id' => '7'
            ],
            [
                'brand_name' => 'Samsung',
                'category_id' => '7'
            ],
            [
                'brand_name' => 'Asus',
                'category_id' => '7'
            ],
            [
                'brand_name' => 'Nintendo',
                'category_id' => '7'
            ],

            [
                'brand_name' => 'Starbucks',
                'category_id' => '8'
            ],
            [
                'brand_name' => 'Tullys',
                'category_id' => '8'
            ],
            [
                'brand_name' => "Seattle's Best",
                'category_id' => '8'
            ],
            [
                'brand_name' => 'Miao Cat Cafe',
                'category_id' => '8'
            ],
        ];
        foreach ($brand as $key => $value) {
            Brand::create($value);
        }
    }
}
