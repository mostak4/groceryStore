<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','GroceryStoreController@home');
Route::get('/envents','GroceryStoreController@envents');
Route::get('/about-us','GroceryStoreController@about');
Route::get('/product','GroceryStoreController@product');
Route::get('/service','GroceryStoreController@service');
Route::get('/household','GroceryStoreController@household');
Route::get('/vegetables','GroceryStoreController@vegetables');
Route::get('/kitchen','GroceryStoreController@kitchen');
Route::get('/category','GroceryStoreController@Beverages');
Route::get('/pet-food','GroceryStoreController@petFood');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
