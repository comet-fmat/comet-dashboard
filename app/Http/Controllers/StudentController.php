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
        $courses = Course::get(['id','name']);

        return view("students", ["data"=>$viewData, "courses"=>$courses, "current"=>$course->id]);
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
