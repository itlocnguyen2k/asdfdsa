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
//frontend
Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/trang-chu','App\Http\Controllers\HomeController@index');

//backend
Route::get('admin','App\Http\Controllers\AdminController@index');
Route::get('dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::post('admin-dashboard','App\Http\Controllers\AdminController@dashboard');
Route::get('logout','App\Http\Controllers\AdminController@logout');

//Category Product
Route::get('add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');
Route::post('save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');
Route::get('edit-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@edit_category_product');
Route::post('update-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@update_category_product');
Route::get('delete-category-product/{category_product_id}','App\Http\Controllers\CategoryProduct@delete_category_product');