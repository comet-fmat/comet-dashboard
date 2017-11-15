<?php

namespace App\Http\Controllers;

use App\CalendarEvent;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function initCalendar(){
        $events = [];

        $events[] = \Calendar::event(
            'Event One', //event title
            false, //full day event?
            '2017-11-11T0800', //start time (you can also use Carbon instead of DateTime)
            '2015-11-12T0800', //end time (you can also use Carbon instead of DateTime)
            0 //optionally, you can specify an event ID
        );

        $events[] = \Calendar::event(
            "Valentine's Day", //event title
            true, //full day event?
            new \DateTime('2017-11-14'), //start time (you can also use Carbon instead of DateTime)
            new \DateTime('2012-11-14'), //end time (you can also use Carbon instead of DateTime)
            'stringEventId' //optionally, you can specify an event ID
        );
        $calendar = \Calendar::addEvents($events) //add an array with addEvents
        ->setOptions([ //set fullcalendar options
            'firstDay' => 1
        ]);


        return view('calendar', compact('calendar'));
    }
}
