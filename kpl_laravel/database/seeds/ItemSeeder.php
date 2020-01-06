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
            // FERRULE, PLUG AND CUP
            [
                'item_name' => 'Ferrule',
                'category_id' => 1
            ],
            [
                'item_name' => 'J-cap',
                'category_id' => 1
            ],
            [
                'item_name' => 'J-plug',
                'category_id' => 1
            ],
            [
                'item_name' => 'N-cap',
                'category_id' => 1
            ],
            [
                'item_name' => 'N-plug',
                'category_id' => 1
            ],

            // FLANGE
            [
                'item_name' => 'Flange',
                'category_id' => 2
            ],
            [
                'item_name' => 'Flange 45deg',
                'category_id' => 2
            ],
            [
                'item_name' => 'Flange 90deg',
                'category_id' => 2
            ],
            [
                'item_name' => 'Long drop',
                'category_id' => 2
            ],
            // FUEL DISPENSER
            // GASOLINE HANGING HARDWARE
            // HYDRAULIC ADAPTORS
            [
                'item_name' => '1NM Adaptor',
                'category_id' => 5
            ],
            [
                'item_name' => '86324 90deg',
                'category_id' => 5
            ],
            [
                'item_name' => '86336',
                'category_id' => 5
            ],
            [
                'item_name' => 'Banjo Bolt',
                'category_id' => 5
            ],
            [
                'item_name' => 'Bushing Reducer',
                'category_id' => 5
            ],
            [
                'item_name' => 'Coupling',
                'category_id' => 5
            ],
            [
                'item_name' => 'ISN 90deg',
                'category_id' => 5
            ],
            [
                'item_name' => 'Jic Adaptor 90deg',
                'category_id' => 5
            ],
            [
                'item_name' => 'Jic Adaptor',
                'category_id' => 5
            ],
            [
                'item_name' => 'Jic male x npt female',
                'category_id' => 5
            ],
            [
                'item_name' => 'Jic male x npt male',
                'category_id' => 5
            ],
            [
                'item_name' => 'jic npt adaptor',
                'category_id' => 5
            ],
            [
                'item_name' => 'jic x jic adaptor',
                'category_id' => 5
            ],
            [
                'item_name' => 'jic x npt',
                'category_id' => 5
            ],
            [
                'item_name' => 'jic x o-ring type 90 deg',
                'category_id' => 5
            ],
            [
                'item_name' => 'male and female npt adaptor 45 deg',
                'category_id' => 5
            ],
            [
                'item_name' => 'male and female npt adaptor 90 deg',
                'category_id' => 5
            ],
            [
                'item_name' => 'male and female npt adaptor',
                'category_id' => 5
            ],
            [
                'item_name' => 'male jic 45deg',
                'category_id' => 5
            ],
            [
                'item_name' => 'male jic 90deg',
                'category_id' => 5
            ],
            [
                'item_name' => 'male JIC x fermale npt 90 deg adaptor',
                'category_id' => 5
            ],
            [
                'item_name' => 'npt adaptor 45deg',
                'category_id' => 5
            ],
            [
                'item_name' => 'npt adaptor 90 deg',
                'category_id' => 5
            ],
            [
                'item_name' => 'npt adaptor',
                'category_id' => 5
            ],
            [
                'item_name' => 'npt jumpsize',
                'category_id' => 5
            ],
            [
                'item_name' => 'nut',
                'category_id' => 5
            ],
            [
                'item_name' => 'oring x jic',
                'category_id' => 5
            ],
            [
                'item_name' => 'tee coupling',
                'category_id' => 5
            ],
            
            // [
            //     'item_name' => '',
            //     'category_id' => 5
            // ],
        ];
        
        foreach ($items as $item) {
            Item::create($item);
        }
    }
}
