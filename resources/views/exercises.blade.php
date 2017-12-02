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
      @foreach($data['exercises'] as $exercise)
        <tr>
          <td>{{$exercise['name']}}</td>
          <td>{{$exercise['publish_time']}}</td>
        </tr>
      @endforeach

      </tbody>
    </table>
  </div>
  </div>
  </div>
@endsection