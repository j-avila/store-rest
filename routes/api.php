<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::apiResources([
    "products" => "ProductsController",
    "carts" => "CartsController",
    "products_cart" => "ProductCartsController",
]);

Route::get("carts/{cart}", "CartsController@show");
Route::get("products/{id}", "ProductsController@show");
Route::get("products_cart/{id}", "ProductCartsController@show");

Route::patch("carts/{cart}", "CartsController@update");
Route::patch("products_cart/{id}", "ProductCartsController@update");