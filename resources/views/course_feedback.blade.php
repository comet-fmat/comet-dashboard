@extends('layout/main')
@section('content')
  <h1 class="content--title">Programación I</h1>
  
  <!-- homework summary -->
  <div class="row">
    <!-- top graphic summary -->
    <!-- top graph 1 -->

    <div class="col-sm-4">
      <div class="box-md-flashcard">
      <h2 class="flashcard--title">PROMEDIO DEL GRUPO</h2>
      <canvas id="myChart" width="auto" height="auto"></canvas>
        
      <script>
      var ctx = document.getElementById("myChart").getContext('2d');
      var myDoughnutChart = new Chart(ctx, {
          type: 'line',
          data: {
              datasets: [{
                  data: [96, 90, 100],
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
    </div>
    <!-- ends graph 1 -->
    <div class="col-sm-8">
      <div class="box-md-flashcard">
        <div class="row">
          
          <!-- top graph 2 -->
          <div class="col-sm-6">
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
          <div class="col-sm-6">
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
    
    <!-- homework summary -->
    <div class="col-sm-6">
      <div class="box-md-flashcard">
        <h2 class="flashcard--title">TAREAS EN CURSO</h2>
        <table class="table">
          <tbody>
            <tr>
              <td>T4U1</td>
              <td>31/35</td>
              <td>89.5</td>
            </tr>
            <tr>
              <td>T3U1</td>
              <td>34/35</td>
              <td>95.4</td>
            </tr>
            <tr>
              <td>T2U1</td>
              <td>35/35</td>
              <td>88.2</td>
            </tr>
            <tr>
              <td>T1U1</td>
              <td>35/35</td>
              <td>89.5</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
      <!-- ends homework summary -->
      <!-- topic summary -->
    <div class="col-sm-6">
      <div class="box-md-flashcard">
        <h2 class="flashcard--title">TEMAS</h2>
        <table class="table">
          <tbody>
            <tr>
              <td>Metodologías de Programación</td>
              <td>5 tareas</td>
              <td>89.5</td>
            </tr>
            <tr>
              <td>Tipos de Datos Primitivos</td>
              <td>3 tareas</td>
              <td>95.4</td>
            </tr>
            <tr>
              <td>Estructuras de Control</td>
              <td>3 tareas</td>
              <td>88.2</td>
            </tr>
            <tr>
              <td>Métodos de Iteración</td>
              <td>2 tareas</td>
              <td>89.5</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- ends topic summary -->
  
  <!-- ends student summary -->
@endsection