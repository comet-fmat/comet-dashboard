<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//osea students...
class User extends Model
{
    protected $visible = ['id', 'login', 'average', 'number_submissions', 'risk_tag'];

    protected $appends = array('average', 'number_submissions', 'risk_tag');

    public function submissions(){
        return $this->hasMany('App\Submission');

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

    public function getAverageAttribute(){
        return 10;
    }

    public function getNumberSubmissionsAttribute(){
        return $this->submissions()->count();
    }

    public function getRiskTagAttribute(){
        $riskTag = '';

        if($this->average < 5){
            $riskTag = 'En riesgo';
        }elseif( 5 < $this->average & $this->average < 8){
            $riskTag = 'Regular';
        } else {
            $riskTag = 'Sobresaliente';
        }

        return $riskTag;
    }

}
