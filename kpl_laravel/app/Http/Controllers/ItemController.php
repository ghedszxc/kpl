<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $items = Item::select('items.id', 'items.brand_id', 'items.category_id',
            'items.item_name', 'items.item_description', 'items.created_at as checkbox')
            ->paginate(20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return $items = Item::where('category_id',$id)->paginate(20);
        $items = Item::where('category_id',$id)->paginate(20);
        $output = [];
        foreach ($items as $item)
        {
            $result = [
                'id' => $item['id'],
                'brand_id' => $item['brand_id'],
                'category_id' => $item['category_id'],

                'checkbox' => '',


                'item_name' => $item['item_name'],
                'item_description' => $item['item_description']
            ];

            array_push($output, $result);
        }

        return $output;
    }

    public function filterByBrand($id)
    {
        // return $items = Item::where('brand_id',$id)->paginate(20);
        $items = Item::where('brand_id',$id)->paginate(20);
        $output = [];
        foreach ($items as $item)
        {
            $result = [
                'id' => $item['id'],
                'brand_id' => $item['brand_id'],
                'category_id' => $item['category_id'],

                'checkbox' => '',


                'item_name' => $item['item_name'],
                'item_description' => $item['item_description']
            ];

            array_push($output, $result);
        }

        return $output;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
