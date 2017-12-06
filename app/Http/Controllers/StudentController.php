<?php

namespace App\Http\Controllers;

use App\Exercise;
use App\Course;
use App\User;
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

    public function display(Course $course, User $student){
        $courses = Course::get(['id','name']);
        $exercises = $student->exercises;

        foreach ($exercises as $exercise) {
            $exercise->average_for_student = $exercise->submissionsAverageByStudent($student);
        }

        $numCourseExercises = Exercise::all()->count();
        $numExercises = $exercises->count();
        $exercises = $exercises->toArray();

        $submissions = $student->submissions->sortBy('created_at');

        $viewData = [
            'numCourseExercises' => $numCourseExercises,
            'numExercises' => $numExercises,
            'exercises' => $exercises,
            'scoreAverage' => '',
            'submissions' => $submissions,
            'studentName' => $student->login,
            'studentAverage' => $student->average,
            'studentRiskTag' => $student->risk_tag
        ];

        return view("students_feedback", [
            "data" => $viewData,
            'courses' => $courses,
            "current" => $course->id
        ]);
    }
}
