<?php

namespace App\Http\Controllers;

use App\Course;
use App\Exercise;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $teacherId = session('teacher_id');

        //All teachers courses
        $teachersCourses = Course::Where('organization_id', $teacherId)->get();

        //Data view reply
        $viewData =[
            'teacherCourses' =>  $teachersCourses
        ];

        return $viewData;
    }

    public function display($course){
        $viewData = [];

        //Number of exercises
        $numExercises = $course->exercises->count();

        //List of exercises
        $exercises = $course->exercises->get();

        //Number of students
        $numStudents = $course->students->count();

        //List of students
        $students = $course->students->get();

        //Data view reply
        $viewData =[
            'numExercises' => $numExercises,
            'exercises' => $exercises,
            'scoreAverage' => '',
            'numStudents'=> $numStudents,
            'students'=> $students,
            'numRiskStudents'=> '',
            'successRateGraphData' => ''

        ];

        return $viewData;

    }
}
