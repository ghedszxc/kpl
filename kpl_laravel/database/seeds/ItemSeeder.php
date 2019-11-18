<?php

use Illuminate\Database\Seeder;
use App\Item;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $items = [
            // SOAP
            [
                'item_name' => 'Safeguard xs',
                'item_description' => 'extra small',
                'category_id' => 1,
                'brand_id' => 1
            ],
            [
                'item_name' => 'Safeguard md',
                'item_description' => 'medium',
                'category_id' => 1,
                'brand_id' => 1
            ],
            [
                'item_name' => 'Safeguard lg',
                'item_description' => 'large',
                'category_id' => 1,
                'brand_id' => 1
            ],
            [
                'item_name' => 'Dove xs',
                'item_description' => 'extra small',
                'category_id' => 1,
                'brand_id' => 2
            ],
            [
                'item_name' => 'Dove md',
                'item_description' => 'medium',
                'category_id' => 1,
                'brand_id' => 2
            ],
            [
                'item_name' => 'Dove lg',
                'item_description' => 'large',
                'category_id' => 1,
                'brand_id' => 2
            ],
            [
                'item_name' => 'Silka xs',
                'item_description' => 'extra small',
                'category_id' => 1,
                'brand_id' => 3
            ],
            [
                'item_name' => 'Silka md',
                'item_description' => 'medium',
                'category_id' => 1,
                'brand_id' => 3
            ],
            [
                'item_name' => 'Silka lg',
                'item_description' => 'large',
                'category_id' => 1,
                'brand_id' => 3
            ],

            // SHAMPOO
            [
                'item_name' => 'Head & Shoulder xs',
                'item_description' => 'extra small',
                'category_id' => 2,
                'brand_id' => 4
            ],
            [
                'item_name' => 'Head & Shoulder md',
                'item_description' => 'medium',
                'category_id' => 2,
                'brand_id' => 4
            ],
            [
                'item_name' => 'Head & Shoulder lg',
                'item_description' => 'large',
                'category_id' => 2,
                'brand_id' => 4
            ],
            [
                'item_name' => 'Clear xs',
                'item_description' => 'extra small',
                'category_id' => 2,
                'brand_id' => 5
            ],
            [
                'item_name' => 'Clear md',
                'item_description' => 'medium',
                'category_id' => 2,
                'brand_id' => 5
            ],
            [
                'item_name' => 'Clear lg',
                'item_description' => 'large',
                'category_id' => 2,
                'brand_id' => 5
            ],
            [
                'item_name' => 'Tresemme xs',
                'item_description' => 'extra small',
                'category_id' => 2,
                'brand_id' => 6
            ],
            [
                'item_name' => 'Tresemme md',
                'item_description' => 'medium',
                'category_id' => 2,
                'brand_id' => 6
            ],
            [
                'item_name' => 'Tresemme lg',
                'item_description' => 'large',
                'category_id' => 2,
                'brand_id' => 6
            ],
            [
                'item_name' => 'Palmolive xs',
                'item_description' => 'extra small',
                'category_id' => 2,
                'brand_id' => 7
            ],
            [
                'item_name' => 'Palmolive md',
                'item_description' => 'medium',
                'category_id' => 2,
                'brand_id' => 7
            ],
            [
                'item_name' => 'Palmolive lg',
                'item_description' => 'large',
                'category_id' => 2,
                'brand_id' => 7
            ],
            [
                'item_name' => 'Vaseline xs',
                'item_description' => 'extra small',
                'category_id' => 2,
                'brand_id' => 8
            ],
            [
                'item_name' => 'Vaseline md',
                'item_description' => 'medium',
                'category_id' => 2,
                'brand_id' => 8
            ],
            [
                'item_name' => 'Vaseline lg',
                'item_description' => 'large',
                'category_id' => 2,
                'brand_id' => 8
            ],

            // TOOTHPASTE
            [
                'item_name' => 'Colgate xs',
                'item_description' => 'extra small',
                'category_id' => 3,
                'brand_id' => 9
            ],
            [
                'item_name' => 'Colgate md',
                'item_description' => 'medium',
                'category_id' => 3,
                'brand_id' => 9
            ],
            [
                'item_name' => 'Colgate lg',
                'item_description' => 'large',
                'category_id' => 3,
                'brand_id' => 9
            ],
            [
                'item_name' => 'Close up xs',
                'item_description' => 'extra small',
                'category_id' => 3,
                'brand_id' => 10
            ],
            [
                'item_name' => 'Close up md',
                'item_description' => 'medium',
                'category_id' => 3,
                'brand_id' => 10
            ],
            [
                'item_name' => 'Close up lg',
                'item_description' => 'large',
                'category_id' => 3,
                'brand_id' => 10
            ],

            // CLOTHINGS
            [
                'item_name' => 'T-shirt (Red)',
                'item_description' => 'small',
                'category_id' => 4,
                'brand_id' => 11
            ],
            [
                'item_name' => 'Hat (Denim)',
                'item_description' => 'medium',
                'category_id' => 4,
                'brand_id' => 11
            ],
            [
                'item_name' => 'T-shirt (Blue)',
                'item_description' => 'small',
                'category_id' => 4,
                'brand_id' => 12
            ],
            [
                'item_name' => 'Denim Pants',
                'item_description' => 'medium',
                'category_id' => 4,
                'brand_id' => 12
            ],
            [
                'item_name' => 'Sweatshirt',
                'item_description' => 'small',
                'category_id' => 4,
                'brand_id' => 13
            ],
            [
                'item_name' => 'Cowboy Shoes',
                'item_description' => 'medium',
                'category_id' => 4,
                'brand_id' => 13
            ],
            [
                'item_name' => 'Jacket',
                'item_description' => 'small',
                'category_id' => 4,
                'brand_id' => 14
            ],
            [
                'item_name' => 'Sando',
                'item_description' => 'small',
                'category_id' => 4,
                'brand_id' => 14
            ],
            [
                'item_name' => 'Perfume',
                'item_description' => 'new product',
                'category_id' => 4,
                'brand_id' => 15
            ],
            [
                'item_name' => 'Wallet',
                'item_description' => 'maroon',
                'category_id' => 4,
                'brand_id' => 15
            ],

            // SHOES
            [
                'item_name' => 'Nike Zoom',
                'item_description' => '35-45 sizes',
                'category_id' => 5,
                'brand_id' => 16
            ],
            [
                'item_name' => 'KD 12',
                'item_description' => '35-38 sizes',
                'category_id' => 5,
                'brand_id' => 16
            ],
            [
                'item_name' => 'Lebron 13',
                'item_description' => '40-49 sizes',
                'category_id' => 5,
                'brand_id' => 16
            ],
            [
                'item_name' => 'Jordan 1',
                'item_description' => 'red and white',
                'category_id' => 5,
                'brand_id' => 17
            ],
            [
                'item_name' => 'Jordan Retro',
                'item_description' => 'matte red',
                'category_id' => 5,
                'brand_id' => 17
            ],
            [
                'item_name' => 'Van Gogh',
                'item_description' => 'limited edition',
                'category_id' => 5,
                'brand_id' => 18
            ],
            [
                'item_name' => 'old Skul',
                'item_description' => 'triple black',
                'category_id' => 5,
                'brand_id' => 18
            ],
            [
                'item_name' => 'High cut',
                'item_description' => 'white version',
                'category_id' => 5,
                'brand_id' => 19
            ],

            // RESTAURANT
            [
                'item_name' => 'Happy Meal',
                'item_description' => '150 only',
                'category_id' => 6,
                'brand_id' => 20
            ],
            [
                'item_name' => 'Super Meal',
                'item_description' => 'chicken, spaghetti, rice, and drinks',
                'category_id' => 6,
                'brand_id' => 20
            ],
            [
                'item_name' => 'BFF Fries',
                'item_description' => 'bbq flavor',
                'category_id' => 6,
                'brand_id' => 21
            ],
            [
                'item_name' => 'Chicken Sandwich',
                'item_description' => 'with fries',
                'category_id' => 6,
                'brand_id' => 21
            ],
            [
                'item_name' => 'Coke Float',
                'item_description' => 'large size',
                'category_id' => 6,
                'brand_id' => 21
            ],
            [
                'item_name' => 'Flavored Shots',
                'item_description' => 'spicy',
                'category_id' => 6,
                'brand_id' => 22
            ],
            // GADGETS
            [
                'item_name' => 'Iphone XR',
                'item_description' => '64gb',
                'category_id' => 7,
                'brand_id' => 23
            ],
            [
                'item_name' => 'Airmac',
                'item_description' => '256gb internal memory 16gb ram',
                'category_id' => 7,
                'brand_id' => 23
            ],
            [
                'item_name' => 'S10+',
                'item_description' => '32gb',
                'category_id' => 7,
                'brand_id' => 24
            ],
            [
                'item_name' => 'Note 8+ edge',
                'item_description' => '128gb internal memory',
                'category_id' => 7,
                'brand_id' => 24
            ],
            [
                'item_name' => 'ROG',
                'item_description' => '128gb ram',
                'category_id' => 7,
                'brand_id' => 25
            ],
            [
                'item_name' => 'Switch',
                'item_description' => 'all packages included',
                'category_id' => 7,
                'brand_id' => 26
            ],
            // CAFE
            [
                'item_name' => 'Dark Mocha',
                'item_description' => 'venti with sticker',
                'category_id' => 8,
                'brand_id' => 27
            ],
            [
                'item_name' => 'Matcha',
                'item_description' => 'grande with sticker',
                'category_id' => 8,
                'brand_id' => 27
            ],
            [
                'item_name' => 'Coffee Jelly',
                'item_description' => 'tall with fries',
                'category_id' => 8,
                'brand_id' => 28
            ],
            [
                'item_name' => 'Cookies and Cream',
                'item_description' => 'tall with burger',
                'category_id' => 8,
                'brand_id' => 28
            ],
            [
                'item_name' => 'Choco Frappe',
                'item_description' => 'venti including wifi password',
                'category_id' => 8,
                'brand_id' => 29
            ],
            [
                'item_name' => 'Ciaometto Milk Tea',
                'item_description' => 'large size',
                'category_id' => 8,
                'brand_id' => 30
            ],
            [
                'item_name' => 'Meollo Hot Coffee',
                'item_description' => 'sugar free',
                'category_id' => 8,
                'brand_id' => 30
            ]
        ];
        
        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
