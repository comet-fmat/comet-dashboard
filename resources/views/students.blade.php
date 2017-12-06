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
        <td>Nombre</td>
        <td>Entregas</td>
        <td>Promedio</td>
        <td>Estatus</td>

      </thead>
      <tbody>
      @foreach($data['students'] as $student)
        <tr>
          <td> <a href="{{ route('student_detail',[$current,$student['id']]) }}"> {{$student['login']}}</a></td>
          <td>{{$student['number_submissions']}}</td>
          <td>{{$student['average']}}</td>
          <td>{{$student['risk_tag']}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  </div>
  </div>
@endsection