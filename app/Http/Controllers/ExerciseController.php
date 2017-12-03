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

        return view("exercises", ["data"=>$viewData]);
    }

    public function display(Course $course, Exercise $exercise)
    {
        $viewData = $exercise->toArray();
        return view("homeworks_feedback", ["data"=>$viewData]);
    }
}
