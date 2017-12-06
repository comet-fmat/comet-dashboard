<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $visible = ['id', 'user_id','student_name','points', 'student','exercise_name','all_tests_passed','pretest_error'];
    protected $appends = array('student_name');

    public function student() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function exercise() {
        return $this->belongsTo('App\Exercise', 'exercise_name', 'name');
    }

    public function getStudentNameAttribute(){
        return $this->student->login;
    }
}
