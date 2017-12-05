<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $visible = ['id', 'name', 'students','submissions','course_id','publish_time','number_submissions','number_course_students','submissions_average','available_points'];

    protected $appends = array('submissions_average', 'available_points','number_submissions', 'number_course_students');

    public function submissions(){
        return $this->hasMany('App\Submission', 'exercise_name', 'name');
    }
    public function course(){
        return $this->belongsTo('App\Course', 'course_id', 'id');
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
            'App\Submission',
            'exercise_name',
            'id',
            'name',
            'user_id'
        );

    }
    public function awardedPoints($exercise, $student){

        $exercise = Exercise::where('id', $exercise)->first();
        $submission = $exercise->submissions->where('user_id', $student)->get();
        $awardedPoints = AwardedPoint::where('submission_id', $submission);
        return $awardedPoints;

    }
    public function getSubmissionsAverageAttribute(){
        $average = 0;
        $submissions = $this->submissions;

        foreach ($submissions as $submission) {
            $average = $average + $submission->points;
        }
        $average = $average/ $submissions->count();

        return number_format($average,2);

    }

    public function getNumberSubmissionsAttribute(){
        return $this->submissions()->count();

    }

    public function getAvailablePointsAttribute(){
        return $this->hasOne('App\AvailablePoint');

    }

    public function testCases(){
        //TODO
        return null;
    }

    public function getNumberCourseStudentsAttribute(){

        return $this->course->number_students;

    }

}
