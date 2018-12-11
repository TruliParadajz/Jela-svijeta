<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function meals()
    {
        return $this->belongsToMany('App\Meal', 'meal_tag', 'tag_id', 'meal_id');
    }
}
