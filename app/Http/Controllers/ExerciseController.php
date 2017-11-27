<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function index($course){
        $viewData = [];

        //All course exercises
        $exercises = $course->exercises->get();

        //Data view reply
        $viewData =[
            'exercises' => $exercises
        ];

        return $viewData;
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
