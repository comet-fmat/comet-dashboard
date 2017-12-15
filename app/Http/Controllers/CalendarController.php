<?php

namespace App\Http\Controllers;

use App\CalendarEvent;
use App\Course;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function initCalendar(Course $course){
        $events = [];

        $events =[
            \Calendar::event(
                "Semana de Ordinarios", //event title
                true, //full day event?
                new \DateTime('2017-12-1'), //start time (you can also use Carbon instead of DateTime)
                new \DateTime('2017-12-8'), //end time (you can also use Carbon instead of DateTime)
                'stringEventId' //optionally, you can specify an event ID
            ),
            \Calendar::event(
                "Periodo Vacacional", //event title
                true, //full day event?
                new \DateTime('2017-12-19'), //start time (you can also use Carbon instead of DateTime)
                new \DateTime('2017-12-29'), //end time (you can also use Carbon instead of DateTime)
                'stringEventId' //optionally, you can specify an event ID
            )

        ] ;
        $calendar = \Calendar::addEvents($events) //add an array with addEvents
        ->setOptions([ //set fullcalendar options
            'firstDay' => 1
        ]);

        $session_courses = session('courses');
        $courses = collect($session_courses);
        return view('calendar', ["calendar"=>$calendar, "courses"=>$courses, "current"=>$course->id]);

    }
}
