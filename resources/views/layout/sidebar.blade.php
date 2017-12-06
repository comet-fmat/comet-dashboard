
<!-- sidebar header -->
<div class="row sidebar--header">
  <div class="col-xs-4 text-center">
    <img class="sidebar--logo" src="/images/logo-tmc.png" />
  </div>
  <div class="col-xs-8 sidebar--title">
    <span>testmycode</span>
  </div>
</div>
<!-- ends sidebar header -->

<!-- sidebar user -->
<div class="row sidebar--user">
  <div class="col-xs-4 text-center">
    <img class="sidebar--user__picture" src="/images/profile_picture-user.jpg" />
  </div>
  <div class="col-xs-8 sidebar--title">
    <span>Mr. John Green</span>
  </div>
</div>
<!-- ends sidebar user -->

<!-- sidebar dropdown -->
<div class="sidebar--dropdown dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="course-select-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    {{$courses->find($current)->name}}
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="course-select-menu">
    @foreach($courses as $course)
      <li><a href="{{ route('course',$course->id) }}">{{$course->name}}</a></li>
    @endforeach


  </ul>
</div>
<!-- ends sidebar dropdown -->

<!-- sidebar navigation -->
<div class="row sidebar--navigation">
  <div class="col-xs-12">
    <h1>RESUMEN</h1>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('course',$current) }}'>Panorama</a></span>
      </div>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('exercises',$current) }}'>Lista de Tareas</a></span>
      </div>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('students',$current) }}'>Lista de Alumnos</a></span>
      </div>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('calendar',$current) }}'>Calendario</a></span>
      </div>
  </div>
</div>

{{--<div class="row sidebar--navigation">
  <div class="col-xs-12">
    <h1>RETROALIMENTACION</h1>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('exercise_detail',[1,1]) }}'>Tareas</a></span>
      </div>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('course_feedback') }}'>Curso</a></span>
      </div>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('students_feedback') }}'>Alumnos</a></span>
      </div>
  </div>
</div>--}}
<!-- ends sidebar navigation -->


