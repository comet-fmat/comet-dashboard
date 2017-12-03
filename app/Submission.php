<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $visible = ['id', 'user_id','student_name','points', 'student','all_tests_passed','pretest_error'];
    protected $appends = array('student_name');

    public function student(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

    public function getStudentNameAttribute(){

        return $this->student->login;

    }


}
