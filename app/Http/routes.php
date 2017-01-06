<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/',['uses'=> 'ProductController@index','as' => 'product.index']);
Route::get('product/create',['uses'=> 'ProductController@create','as' => 'product.create']);
Route::post('product/storebrand',['uses'=> 'ProductController@storeBrand','as' => 'product.storebrand']);
Route::post('product/storesuplier',['uses'=> 'ProductController@storeSuplier','as' => 'product.storesuplier']);
Route::post('product/store',['uses'=> 'ProductController@store','as' => 'product.store']);

