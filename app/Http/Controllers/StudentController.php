<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index($course){
        $viewData = [];

        //All course students
        $students = $course->students->get();

        //Data view reply
        $viewData =[
            'students' => $students
        ];

        return $viewData;
    }

    public function display($student){
        $viewData = [];

        //Number of exercises
        $numExercises = $student->exercises->count();

        //List of exercises
        $exercises = $student->exercises->get();

        //Number of submissions
        $numSubmissions = $student->submissions->count();

        //Data view reply
        $viewData =[
            'numExercises' => $numExercises,
            'exercises' => $exercises,
            'scoreAverage' => '',
            'numSubmissions'=> $numSubmissions,
            'submissionsAverage' =>''

        ];


        return $viewData;

    }
}
