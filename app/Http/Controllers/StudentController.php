<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Submission;
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

        $session_courses = session('courses');
        $courses = collect($session_courses);

        return view("students", ["data"=>$viewData, "courses"=>$courses, "current"=>$course->id]);
    }

    public function display(Course $course, User $student){
        $session_courses = session('courses');
        $courses = collect($session_courses);

        $exercises = $student->exercises;

        foreach ($exercises as $exercise) {
            $exercise->average_for_student = $exercise->submissionsAverageByStudent($student);
        }

        $numCourseExercises = Exercise::all()->count();
        $numExercises = $exercises->count();
        $exercises = $exercises->toArray();

        $viewData = [
            'maxAmountSubmissionInExercises' => $student->maxSubmissionsPerExercise,
            'minAmountSubmissionInExercises' => $student->minSubmissionsPerExercise,
            'avgAmountSubmissionInExercises' => $student->avgSubmissionsPerExercise,

            'numCourseExercises' => $numCourseExercises,
            'numExercises' => $numExercises,
            'exercises' => $exercises,
            'scoreAverage' => '',
            'submissions' => $student->submissions->sortBy('created_at'),
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
