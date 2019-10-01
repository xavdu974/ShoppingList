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
//Accède à monContrôleur@saMéthode
Route::get('/', 'shoppingListController@show');

Route::get('/add', 'shoppingListController@add');

Route::get('/edit', 'shoppingListController@edit');

Route::post('/', 'shoppingListController@store');