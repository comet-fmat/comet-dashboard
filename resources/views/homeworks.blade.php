@extends('layout/main')
@section('content')
  <h1 class="content--title">Alumnos</h1>
  <!-- student list -->
  <div class="row">
    <div class="col-sm-12">
      <div class="box-lg-flashcard">
    <table class="table">
      <thead>
        <td>Tarea</td>
        <td>Entregas</td>
        <td>Promedio</td>
      </thead>
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
  </div>
@endsection