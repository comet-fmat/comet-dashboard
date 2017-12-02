@extends('layout/main')
@section('content')
  <h1 class="content--title">Alumnos</h1>
  <!-- student list -->
  <div class="row">
    <div class="col-sm-12">
      <div class="box-lg-flashcard">
    <table class="table">
      <thead>
        <td>Nombre</td>

      </thead>
      <tbody>
      @foreach($data['students'] as $student)
        <tr>
          <td>{{$student['login']}}</td>
          <td>{{$student['login']}}</td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
  </div>
  </div>
@endsection