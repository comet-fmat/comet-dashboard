<?php

namespace App\Http\Controllers;

use App\Course;
use App\Exercise;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $teacherId = session('teacher_id');

        $teachersCourses = Course::Where('organization_id', $teacherId)->get();
        return $teachersCourses;
    }
    public function show($course){
        $exercises = Exercise::Where('course_id', $course)->get();
        return $exercises;
        //Average
        //

    }
}
