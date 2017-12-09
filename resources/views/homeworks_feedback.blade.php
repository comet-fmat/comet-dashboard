@extends('layout/main')
@section('content')
  <h1 class="content--title">Tarea {{$data['name']}}</h1>
  {{--dd(get_defined_vars())--}}
  <!-- homework summary -->
  <div class="row">
    <!-- top graphic summary -->
    <div class="col-sm-12">
      <div class="box-md-flashcard">
        <div class="row">
          <!-- top graph 1 -->
          <div class="col-sm-4">
            <h2 class="flashcard--title">PROMEDIO DEL GRUPO</h2>
            <canvas id="myChart" width="auto" height="auto"></canvas>

            <script>
            var ctx = document.getElementById("myChart").getContext('2d');
            var myDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [{{$data['submissions_average']}}, {{10-$data['submissions_average']}}],
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
                    }],

                    // These labels appear in the legend and in the tooltips when hovering different arcs
                    labels: [
                        'Promedio',
                        'Total'

                    ]
                }
            });
            </script>
          </div>
          <!-- ends graph 1 -->
          <!-- top graph 2 -->
          <div class="col-sm-4">
            <h2 class="flashcard--title">ENTREGAS</h2>
            <canvas id="myChart2" width="auto" height="auto"></canvas>
              
            <script>
            var ctx = document.getElementById("myChart2").getContext('2d');
            var myDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [{{$data['number_course_students']}}, {{$data['number_submissions']}}],
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
                    }],

                    // These labels appear in the legend and in the tooltips when hovering different arcs
                    labels: [
                        'Entregas Faltantes',
                        'Tareas Entregadas'
                    ]
                }
            });
            </script>
          </div>
          <!-- ends graph 2 -->
          <!-- top graph 3 -->
          <div class="col-sm-4">
            <h2 class="flashcard--title">PROMEDIO DEL GRUPO</h2>
            <canvas id="myChart3" width="auto" height="auto"></canvas>
              
            <script>
            var ctx = document.getElementById("myChart3").getContext('2d');
            var myDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [30, 50, 25],
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
                    }],

                    // These labels appear in the legend and in the tooltips when hovering different arcs
                    labels: [
                        'Red',
                        'Yellow',
                        'Blue'
                    ]
                }
            });
            </script>
          </div>
          <!-- ends graph 3 -->
        </div>
      </div>
    </div>
    <!-- ends top graphic summary -->
    
    <!-- student list summary -->
    <div class="col-sm-12">
      <div class="box-lg-flashcard">
        <h2 class="flashcard--title">ALUMNOS</h2>
        <table class="table">
          <thead>
          <td>Alumno</td>
          <td>Puntos</td>
          <td>Estado</td>
          <td>Error</td>
          </thead>
          <tbody>
          @foreach($data['submissions'] as $submission)
            <tr>
              <td> <a href="{{ route('student_detail',[$current,$submission['user_id']]) }}"> {{$submission['student_name']}}</a></td>
              <td>{{$submission['points']}}</td>
              <td>{{$submission['all_tests_passed']}}</td>
              <td>{{$submission['pretest_error']}}</td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <!-- ends student list summary -->
  </div>
  
  <!-- ends homework summary -->
@endsection