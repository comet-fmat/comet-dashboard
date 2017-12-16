<?php

namespace App\Http\Controllers;

use App\Course;
use App\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index(Course $course){
        $viewData = [];

        //All course exercises
        $exercises = $course->exercises->toArray();

        //Data view reply
        $viewData =[
            'exercises' => $exercises
        ];
        $session_courses = session('courses');
        $courses = collect($session_courses);

        return view("exercises", ["data"=>$viewData, "courses"=>$courses, "current"=>$course->id]);
    }

    public function display(Course $course, Exercise $exercise)
    {
        $viewData = $exercise->toArray();
        $session_courses = session('courses');
        $courses = collect($session_courses);
        return view("homeworks_feedback", ["data"=>$viewData, "courses"=>$courses, "current"=>$course->id]);
    }
}
