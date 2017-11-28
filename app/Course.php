<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    public function exercises()
    {
        return $this->hasMany('App\Exercise');
    }
    public function students()
    {
        return $this->hasManyThrough(
            'App\User',
            'App\Assistantship',
            'course_id',
            'id',
            'id',
            'user_id'
        );
    }

    public function scoreAverage(){
        $average = 0;
        $exercises = $this->exercises;

        foreach ($exercises as $exercise) {
            $average = $average + $exercise->submissionsAverage();
        }

        return $average;

    }
    public function studentsAtRisk(){
        //TODO
    }
    public function successRateGraphData(){

        $graphXData = [];
        $graphYData = [];
        $exercises = $this->exercises;
        foreach ($exercises as $exercise) {
            array_push( $graphXData, $exercise->name);
            array_push( $graphYData, $exercise->submissionsAverage());
        }
        $successRate = [
            'labels' =>  $graphXData,
            'data' =>  $graphYData
        ];


        return  $successRate;
    }

}
