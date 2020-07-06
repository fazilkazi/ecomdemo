<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();
Route::resource('/catagories','CatagoriesController');
Route::resource('/orders','OrdersController');
Route::resource('/products','ProductsController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/checkout', 'OrdersController@checkout')->name('checkout');
Route::get('/addToCart/{id}', 'ProductsController@getAddCart')->name('products.addToCart');
Route::get('/reduceByOne/{id}', 'ProductsController@reduceByOne')->name('products.reduceByOne');
Route::get('/removeAll/{id}', 'ProductsController@removeAll')->name('products.removeAll');
Route::get('/productsShoppingCart', 'ProductsController@getCart')->name('productsShoppingCart');
Route::post('/search', 'ProductsController@searchName')->name('search');
