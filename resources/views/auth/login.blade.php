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
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                    <input id="email" class="form-control login--input" name="email" placeholder="email "  value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <input id="password" type="password" class="form-control login--input" name="password" placeholder="contrasena"  required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                            </div>

                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary login--button">
                                        Login
                                    </button>
                                </div>
                            </div>

                        </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>

@endsection


