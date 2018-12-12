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

/*Route::get('/', function () {
    return view('food.index');
});

Route::get('/{id}/{name}', function($id, $name) {
    return "Num = ".$id." ".$name;
});

Route::get('admin/posts/example', array('as' => 'admin.home', function(){
    $url = route('admin.home');
    return "URL is: ". $url;
}));
*/
//Route::get('/meal/{id}', 'MealsController@index');

//Route::resource('meals', 'MealsController');

//Route::get('/meals', 'MealsController@meal');

Route::get('/{per_page?}&{page?}&{category?}&{tags?}&{with?}&{diff_time?}', 'RequestsController@getThose');
Route::get('/', 'ShowAllController@showAll');