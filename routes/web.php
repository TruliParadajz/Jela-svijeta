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
Route::get('/page/{per_page}/{page}', 'ShowTargetedController@getThose');
Route::get('/', 'ShowAllController@showAll');
Route::get('/category/{categoryNum}', 'ShowPerCategory@getCategory');
Route::get('/tag/{tagNum}', 'ShowPerTagController@getTag');