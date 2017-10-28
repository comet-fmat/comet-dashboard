@extends('layout/plaid')
@section('content')
  <div class="col-xs-offset-4 col-xs-4">
    <div class="box-login-flashcard">
      <div class="row">
        <div class="col-xs-offset-4 col-xs-4">
          <img class="login--logo" src="images/logo-tmc.png" />
          <span class="login--title">testmycode</span>
        </div>
        
        <div class="col-xs-offset-1 col-xs-10">
          <div class="login--form">
            <div class="form-group">
              <input type="text" class="form-control login--input" placeholder="usuario" id="usr">
            </div>
            <div class="form-group">
              <input type="password" class="form-control login--input" placeholder="contrasena" id="pwd">
            </div>
            <button type="button" class="btn login--button">Log in</button>
          </div>
          
        </div>
        
      </div>
        
    </div>
  </div>
@endsection