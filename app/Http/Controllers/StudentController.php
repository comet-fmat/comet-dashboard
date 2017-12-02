<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(Course $course){
        $viewData = [];

        //All course students
        $students = $course->students->toArray();

        //Data view reply
        $viewData =[
            'students' => $students
        ];

        return view("students", ["data"=>$viewData]);
    }

    public function display(Student $student){
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


        return view("students", ["data"=>$viewData]);

    }
}
