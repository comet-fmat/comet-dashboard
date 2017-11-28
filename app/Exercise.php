<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    public function submissions(){
        return $this->hasMany('App\Submission', 'exercise_name', 'name');
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
        return $this->hasManyThrough(
            'App\User',
            'App\Submissions',
            'exercise_name',
            'name',
            'id',
            'id'
        );

    }
    public function awardedPoints($exercise, $student){

        $exercise = Exercise::where('id', $exercise)->first();
        $submission = $exercise->submissions->where('user_id', $student)->get();
        $awardedPoints = AwardedPoint::where('submission_id', $submission);
        return $awardedPoints;

    }
    public function submissionsAverage(){
        $average = 0;
        $submissions = $this->submissions;

        foreach ($submissions as $submission) {
            $average = $average + $submission->points;
        }

        return $average;

    }
    public function availablePoints(){
        return $this->hasOne('App\AvailablePoint');

    }
    public function testCases(){
        //TODO
        return null;
    }
}
