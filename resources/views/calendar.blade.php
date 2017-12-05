@extends('layout/main')

@section('metas')
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('content')
    <h1 class="content--title">Calendar</h1>
    <div class="row">
        <div class="col-sm-12">
            <div class="box-lg-flashcard">
                {!! $calendar->calendar() !!}
                {!! $calendar->script() !!}
            </div>
        </div>
    </div>

@endsection
