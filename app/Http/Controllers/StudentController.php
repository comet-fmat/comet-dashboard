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

        $maxAmountSubmissionInExercises = Submission::where('user_id', $student->id)
            ->groupBy('exercise_name')
            ->orderByRaw('count(*) desc')
            ->limit(1)
            ->count();

        $minAmountSubmissionInExercises = Submission::where('user_id', $student->id)
            ->groupBy('exercise_name')
            ->orderByRaw('count(*) asc')
            ->limit(1)
            ->count();

        $avgAmountSubmissionInExercises = Submission::where('user_id', $student->id)
            ->selectRaw('count(*)')
            ->groupBy('exercise_name')
            ->get()
            ->avg('count');

        $submissions = $student->submissions->sortBy('created_at');

        $viewData = [
            'maxAmountSubmissionInExercises' => $maxAmountSubmissionInExercises,
            'minAmountSubmissionInExercises' => $minAmountSubmissionInExercises,
            'avgAmountSubmissionInExercises' => $avgAmountSubmissionInExercises,

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
