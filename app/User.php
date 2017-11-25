<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//osea students...
class User extends Model
{
    public function submissions(){
        return $this->hasMany('App\Submissions');

    }

    public function exercise()
    {
        return $this->hasManyThrough(
            'App\Exercise',
            'App\Submissions',
            'exercise_name',
            'name',
            'id',
            'id'
        );
    }
    public function points(){

    }
    public function exercisePoints($exercise){

    }
    public function average(){

    }
}
