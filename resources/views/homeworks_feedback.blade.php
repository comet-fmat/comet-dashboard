@extends('layout/main')
@section('content')
  <h1 class="content--title">Tarea T2U1</h1>
  
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
                        data: [10, 20, 30],
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
          <!-- ends graph 1 -->
          <!-- top graph 2 -->
          <div class="col-sm-4">
            <h2 class="flashcard--title">PROMEDIO DEL GRUPO</h2>
            <canvas id="myChart2" width="auto" height="auto"></canvas>
              
            <script>
            var ctx = document.getElementById("myChart2").getContext('2d');
            var myDoughnutChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    datasets: [{
                        data: [40, 20, 40],
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
          <tbody>
            <tr>
              <td>Alexis</td>
              <td>Dominguez</td>
              <td>97.5</td>
            </tr>
            <tr>
              <td>Mariana</td>
              <td>Milano</td>
              <td>96.5</td>
            </tr>
            <tr>
              <td>Julio</td>
              <td>Fernandez</td>
              <td>93.4</td>
            </tr>
            <tr>
              <td>Ana</td>
              <td>Perez</td>
              <td>92.8</td>
            </tr>
            <tr>
              <td>Sergio</td>
              <td>Tamez</td>
              <td>90.0</td>
            </tr>
            <tr>
              <td>Pedro</td>
              <td>Cantú</td>
              <td>89.2</td>
            </tr>
            <tr>
              <td>Ernesto</td>
              <td>Aguilar</td>
              <td>85.4</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- ends student list summary -->
  </div>
  
  <!-- ends homework summary -->
@endsection