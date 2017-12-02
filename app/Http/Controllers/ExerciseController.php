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

    public function display(Exercise $exercise)
    {
        $viewData = [];

        //Number of students
        $numStudents = $exercise->students->count();

        //List of students
        $students = $exercise->students->get();

        //Number of submissions
        $numSubmissions = $exercise->submissions->count();

        //Submissions average
        $submissionsAverage = $exercise->submissionsAverage();

        //Data view reply
        $viewData = [
            'numStudents' => $numStudents,
            'students' => $students,
            'numSubmissions' => $numSubmissions,
            'submissionsAverage' => $submissionsAverage
        ];


        return $viewData;
    }
}
