<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource("inquire","InquireController");

Route::resource("item","ItemController");
Route::get('item/filterByBrand/{id}','ItemController@filterByBrand');
Route::resource("catergory","CategoryController");


Route::get('redis',function(){
    return response()->json(Redis::get('test'));
});


Route::resource("upload","ImageController");
Route::get('image/{id}',function($id){
    return response()->file(storage_path('app')."/public/products/$id");
});

Route::post('contact',function(Request $request){
    return Mail::to('kpl.industrialsupplyandservices@yahoo.com.ph')->send(new ContactUs($request->all()));
});