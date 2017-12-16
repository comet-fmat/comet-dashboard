<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teachership extends Model
{
    public function organization(){
        return $this->hasone('App\Organization','id');
    }
}
