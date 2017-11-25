<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function exercises()
    {
        return $this->hasMany('App\Exercises');
    }
    public function students()
    {
        return $this->hasManyThrough('App\Users', 'App\AwardedPoints');
    }

}
