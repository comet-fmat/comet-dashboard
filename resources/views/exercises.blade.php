@extends('layout/main')
@section('content')
  <h1 class="content--title">Alumnos</h1>
  {{--dd(get_defined_vars())--}}
  <!-- student list -->
  <div class="row">
    <div class="col-sm-12">
      <div class="box-lg-flashcard">
    <table class="table">
      <thead>
        <td>ID</td>
        <td>Tarea</td>
        <td>Fecha</td>
        <td>Entregas</td>
        <td>Promedio</td>
      </thead>
      <tbody>
      @foreach($data['exercises'] as $exercise)
        <tr>
          <td>{{$exercise['id']}}</td>
          <td> <a href="{{ route('exercise_detail',[$current,$exercise['id']]) }}"> {{$exercise['name']}}</a></td>
          <td>{{$exercise['publish_time']}}</td>
          <td>{{$exercise['number_submissions']}}</td>
          <td>{{$exercise['submissions_average']}}</td>
        </tr>
      @endforeach

      </tbody>
    </table>
  </div>
  </div>
  </div>
@endsection