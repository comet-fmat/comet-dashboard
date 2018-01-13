<?php

namespace App\Http\Controllers;

use App\CalendarEvent;
use App\Course;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function initCalendar(Course $course){
        $events = [];
        $exercises = $course->exercises;

        foreach ($exercises as $exercise){
            $event = \Calendar::event(
                $exercise->name, //event title
                true, //full day event?
                $exercise->publish_time, //start time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg)
                $exercise->publish_time, //end time, must be a DateTime object or valid DateTime format (http://bit.ly/1z7QWbg),
                $exercise->id, //optional event ID
                [
                    'url' => route('exercise_detail',[$course->id, $exercise->id])
                ]
            );
            array_push($events, $event);
        }

        $calendar = \Calendar::addEvents($events) //add an array with addEvents
        ->setOptions([ //set fullcalendar options
            'firstDay' => 1
        ]);

        $session_courses = session('courses');
        $teachers_name = session('teachers_name');
        $courses = collect($session_courses);
        return view('calendar', ["calendar"=>$calendar, "courses"=>$courses, "teacher"=>$teachers_name, "current"=>$course->id]);

    }
}
