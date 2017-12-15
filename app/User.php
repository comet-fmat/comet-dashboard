<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//osea students...
class User extends Model
{
    protected $visible = ['id', 'login', 'average', 'number_submissions', 'risk_tag'];
    protected $appends = array('user_id', 'average', 'number_submissions', 'risk_tag');

    public function submissions(){
        return $this->hasMany('App\Submission');
    }
    public function teacherships(){
        return $this->hasOne('App\Teachership');
    }



    public function getUserIdAttribute() {
        return $this->id;
    }

    public function exercises() {
        return $this->hasManyThrough(
            'App\Exercise',
            'App\Submission',
            'user_id',
            'name',
            'user_id',
            'exercise_name'
        );
    }

    public function points(){

    }
    public function exercisePoints($exercise){

    }

    public function getAverageAttribute() {
        $average = 0;
        $submissions = $this->submissions;

        if (count($submissions) > 0) {
            foreach ($submissions as $submission) {
                $average = $average + $submission->points;
            }
            $average = $average/ $submissions->count();

            return number_format($average,2);
        } else {
            return 0;
        }
    }

    public function getNumberSubmissionsAttribute(){
        return $this->submissions()->count();
    }

    public function getRiskTagAttribute(){
        $riskTag = '';

        if ($this->average < 5) {
            $riskTag = 'En riesgo';
        } elseif ($this->average < 7) {
            $riskTag = 'Regular';
        } elseif ($this->average < 9) {
            $riskTag = 'Apropiado';
        } else {
            $riskTag = 'Sobresaliente';
        }

        return $riskTag;
    }

}
