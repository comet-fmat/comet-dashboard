@extends('layout/main')
@section('content')
  <h1 class="content--title">Dashboard</h1>
  {{--dd(get_defined_vars())--}}

  <!-- top summary -->
  <div class="row">
  
    <div class="col-sm-3">
      <div class="box-xs-flashcard">
        <div class="row">
          <div class="col-sm-5">
            <img class="flashcard--icon" src="/images/icon-graduationHat.png" />
          </div>
          <div class="col-sm-7">
            <span class="flashcard--number">{{$data['number_students']}}</span>
            <span class="flashcard--tag">Alumnos</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box-xs-flashcard">
        <div class="row">
          <div class="col-sm-5">
            <img class="flashcard--icon" src="/images/icon-book.png" />
          </div>
          <div class="col-sm-7">
            <span class="flashcard--number">{{$data['score_average']}}</span>
            <span class="flashcard--tag">Promedio</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box-xs-flashcard">
        <div class="row">
          <div class="col-sm-5">
            <img class="flashcard--icon" src="/images/icon-note.png" />
          </div>
          <div class="col-sm-7">
            <span class="flashcard--number">{{$data['number_exercises']}}</span>
            <span class="flashcard--tag">Tareas</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box-xs-flashcard">
        <div class="row">
          <div class="col-sm-5">
            <img class="flashcard--icon" src="/images/icon-person.png" />
          </div>
          <div class="col-sm-7">
            <span class="flashcard--number">{{$data['students_at_risk']}}</span>
            <span class="flashcard--tag">Alumnos en Riesgo</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ends top summary -->
  
  <!-- dashboard summary -->
  <div class="row">
    <!-- bar graph -->
    <div class="col-sm-6">
      <div class="box-md-flashcard">
        <h2 class="flashcard--title">PROMEDIO DEL GRUPO</h2>
        <canvas id="myChart" width="auto" height="auto"></canvas>
          <script>
          var ctx = document.getElementById("myChart").getContext('2d');
          var myChart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: [<?php echo '"'.implode('","',  $data['success_rate']['labels'] ).'"' ?>],
                  datasets: [{
                      label: 'Promedio',
                      data: [<?php echo '"'.implode('","',  $data['success_rate']['data'] ).'"' ?>],
                      backgroundColor: [
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)',
                          'rgba(255, 206, 86, 0.2)',
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(153, 102, 255, 0.2)',
                          'rgba(255, 159, 64, 0.2)'
                      ],
                      borderColor: [
                          'rgba(255,99,132,1)',
                          'rgba(54, 162, 235, 1)',
                          'rgba(255, 206, 86, 1)',
                          'rgba(75, 192, 192, 1)',
                          'rgba(153, 102, 255, 1)',
                          'rgba(255, 159, 64, 1)'
                      ],
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero:true
                          }
                      }]
                  }
              }
          });
          </script>
      </div>
    </div>
    <!-- ends bar graph -->
    <!-- homework summary-->
    <div class="col-sm-6">
      <div class="box-md-flashcard">
        <h2 class="flashcard--title">TAREAS EN CURSO</h2>
        <table class="table">
          <tbody>
            @foreach($data['exercises'] as $exercise)

              <tr>
                    <td><img class="flashcard--dot" src="/images/dark_blue_circle.png" /></td>
                    <td>Tarea # {{$exercise['id']}}</td>
                    <td>  <a href="{{ route('exercise_detail',[$current,$exercise['id']]) }}"> {{$exercise['name']}}</a></td>
                    <td>{{$exercise['publish_time']}}</td>



              </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!-- ends homework summary-->
  
    <!-- students summary-->
    <div class="col-sm-12">
      <div class="box-md-flashcard">
        <h2 class="flashcard--title">ALUMNOS</h2>
        <table class="table">
          <tbody>
          @foreach($data['students'] as $student)
            <tr>
              <td> <a href="{{ route('student_detail',[$current,$student['id']]) }}"> {{$student['login']}}</a></td>
              <td>{{$student['average']}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!-- ends students summary-->

  </div>
  
  <!-- ends dashboard summary -->
@endsection