<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShowPerCategory extends Controller
{
    public function getCategory($categoryNum)
    {
        $meals = DB::table('meals')->get();
        $categories = DB::table('categories')->get();
        $tags = DB::table('tags')->get();
        $ingredients = DB::table('ingredients')->get();
        $mealsTags = DB::table('meal_tag')->get();
        $ingredientsMeals = DB::table('ingredient_meal')->get();

        return view('showCategories', compact('meals', 'categories', 'tags', 'ingredients', 'mealsTags', 'ingredientsMeals',
        'categoryNum'));
    }
    
}
