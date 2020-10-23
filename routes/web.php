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

Route::get("/","ProductsController@userindex");

Route::get("/admin","ProductsController@index")->name("adminindex"); 



Route::get("/admin/create","ProductsController@create")->name("admincreate"); 
Route::get("/admin/create/category","ProductsController@create")->name("admincreateCategory"); 



Route::post("/admin/store","ProductsController@store")->name("adminstore"); 
Route::post("/admin/store/category","ProductsController@storeCaterogy")->name("adminstoreCaterogy"); 


Route::get("admin/show/{id}","ProductsController@show")->name("adminshow");





Route::post("/admin/delete","ProductsController@destroy")->name("admindelete"); 
