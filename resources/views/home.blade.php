@extends('layout/main')
@section('content')
  <h1 class="content--title">Dashboard</h1>
  <!-- top summary -->
  <div class="row">
  
    <div class="col-sm-3">
      <div class="box-xs-flashcard">
        <div class="row">
          <div class="col-sm-5">
            <img class="flashcard--icon" src="images/icon-graduationHat.png" />
          </div>
          <div class="col-sm-7">
            <span class="flashcard--number">35</span>
            <span class="flashcard--tag">Alumnos</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box-xs-flashcard">
        <div class="row">
          <div class="col-sm-5">
            <img class="flashcard--icon" src="images/icon-book.png" />
          </div>
          <div class="col-sm-7">
            <span class="flashcard--number">3</span>
            <span class="flashcard--tag">Temas</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box-xs-flashcard">
        <div class="row">
          <div class="col-sm-5">
            <img class="flashcard--icon" src="images/icon-note.png" />
          </div>
          <div class="col-sm-7">
            <span class="flashcard--number">18</span>
            <span class="flashcard--tag">Tareas</span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="box-xs-flashcard">
        <div class="row">
          <div class="col-sm-5">
            <img class="flashcard--icon" src="images/icon-person.png" />
          </div>
          <div class="col-sm-7">
            <span class="flashcard--number">4</span>
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
                  labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                  datasets: [{
                      label: '# of Votes',
                      data: [12, 19, 3, 5, 2, 3],
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
            <tr>
              <td><img class="flashcard--dot" src="images/dark_blue_circle.png" /></td>
              <td>T4U1</td>
              <td>31/35</td>
              <td>89.5</td>
            </tr>
            <tr>
              <td><img class="flashcard--dot" src="images/yellow_circle.png" /></td>
              <td>T3U1</td>
              <td>34/35</td>
              <td>95.4</td>
            </tr>
            <tr>
              <td><img class="flashcard--dot" src="images/light_blue_circle.png" /></td>
              <td>T2U1</td>
              <td>35/35</td>
              <td>88.2</td>
            </tr>
            <tr>
              <td><img class="flashcard--dot" src="images/dark_blue_circle.png" /></td>
              <td>T1U1</td>
              <td>35/35</td>
              <td>89.5</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- ends homework summary-->
  
    <!-- students summary-->
    <div class="col-sm-7">
      <div class="box-md-flashcard">
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
    <!-- ends students summary-->
    
    <!-- topic summary-->
    <div class="col-sm-5">
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
    <!-- ends topic summary-->
  </div>
  
  <!-- ends dashboard summary -->
@endsection