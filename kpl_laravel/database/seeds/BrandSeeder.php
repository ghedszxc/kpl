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
        //
        $brand = [
            [
                'brand_name' => 'Safeguard',
                'category_id' => '1',
            ],
            [
                'brand_name' => 'Dove',
                'category_id' => '1',
            ],
            [
                'brand_name' => 'Kojic',
                'category_id' => '1',
            ],
            [
                'brand_name' => 'Palmolive',
                'category_id' => '2',
            ],
            [
                'brand_name' => 'Clear',
                'category_id' => '2',
            ],
            [
                'brand_name' => 'Sunsilk',
                'category_id' => '2',
            ],
            [
                'brand_name' => 'Colgate',
                'category_id' => '3',
            ],
            [
                'brand_name' => 'Hapee',
                'category_id' => '3',
            ],
            [
                'brand_name' => 'Close up',
                'category_id' => '3',
            ],
        ];
        foreach ($brand as $key => $value) {
            Brand::create($value);
        }
    }
}
