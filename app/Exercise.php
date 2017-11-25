<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public function submissions(){
        return $this->hasMany('App\Submissions', 'exercise_name');
    }
    public function runs(){
        return $this->hasManyThrough(
            'App\TestCaseRun',
            'App\Submissions',
            'exercise_name',
            'name',
            'id',
            'id'
        );
    }
    public function students(){

    }
    public function awardedPoints($student){

    }
    public function availablePoints(){

    }
    public function testCases(){

    }

}
