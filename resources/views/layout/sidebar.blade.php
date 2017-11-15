
<!-- sidebar header -->
<div class="row sidebar--header">
  <div class="col-xs-4 text-center">
    <img class="sidebar--logo" src="images/logo-tmc.png" />
  </div>
  <div class="col-xs-8 sidebar--title">
    <spans>testmycode</span>
  </div>
</div>
<!-- ends sidebar header -->

<!-- sidebar user -->
<div class="row sidebar--user">
  <div class="col-xs-4 text-center">
    <img class="sidebar--user__picture" src="images/profile_picture-user.jpg" />
  </div>
  <div class="col-xs-8 sidebar--title">
    <spans>Mr. John Green</span>
  </div>
</div>
<!-- ends sidebar user -->

<!-- sidebar dropdown -->
<div class="sidebar--dropdown dropdown">
  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
    Programación I
    <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
    <li><a href="#">Programación II</a></li>
    <li><a href="#">Fund. Programación</a></li>
  </ul>
</div>
<!-- ends sidebar dropdown -->

<!-- sidebar navigation -->
<div class="row sidebar--navigation">
  <div class="col-xs-12">
    <h1>RESUMEN</h1>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('home') }}'>Panorama</a></span>
      </div>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('homeworks') }}'>Tareas</a></span>
      </div>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('students') }}'>Alumnos</a></span>
      </div>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('calendar') }}'>Calendario</a></span>
      </div>
  </div>
</div>

<div class="row sidebar--navigation">
  <div class="col-xs-12">
    <h1>RETROALIMENTACION</h1>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('homeworks_feedback') }}'>Tareas</a></span>
      </div>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('course_feedback') }}'>Curso</a></span>
      </div>
      <div class="col-xs-12 sidebar--navigation__option">
      <span><a href='{{ route('students_feedback') }}'>Alumnos</a></span>
      </div>
  </div>
</div>
<!-- ends sidebar navigation -->
