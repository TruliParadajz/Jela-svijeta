<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class ShowAllController extends Controller
{
    function showAll()
    {
        $meals = DB::table('meals')->get();
        $categories = DB::table('categories')->get();
        $tags = DB::table('tags')->get();
        $ingredients = DB::table('ingredients')->get();
        $mealsTags = DB::table('meal_tag')->get();
        $ingredientsMeals = DB::table('ingredient_meal')->get();

        return view('showAll', compact('meals', 'categories', 'tags', 'ingredients', 'mealsTags', 'ingredientsMeals'));
    }
}
