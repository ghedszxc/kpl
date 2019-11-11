<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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
Route::resource("catergory","CategoryController");


Route::get('redis',function(){
    return response()->json(Redis::get('test'));
});