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
        return $items = Item::select('items.id', 'items.category_id', 'items.item_image',
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
        $image_directory = storage_path('app')."/public/products/";
        $image = $request->file('image');
        $filename = md5($image->getClientOriginalName());
        $image_extension = $image->getClientOriginalExtension();
        $image_filename = "$filename.$image_extension";
        Item::create([
            "item_name" => $request->name,
            "item_description" => $request->description,
            "item_image" => $image_filename,
            "category_id" => $request->category,
        ]);
        $image->move($image_directory,$image_filename);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $items = Item::select('items.id', 'items.category_id', 'items.item_image',
        'items.item_name', 'items.item_description', 'items.created_at as checkbox')
        ->where('category_id',$id)->paginate(20);
    }

    public function filterByBrand($id)
    {
        return $items = Item::select('items.id', 'items.category_id', 'items.item_image',
        'items.item_name', 'items.item_description', 'items.created_at as checkbox')
        ->where('brand_id',$id)->paginate(20);
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
