@extends('layouts.app')

@section('content')
<header class="text-center" name="home">
  <div class="intro-text">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>

                    <div class="panel-body">
                        <div class="imgcontainer">
                            <img src="{{ asset('img/team/01.jpg')}}" alt="Avatar" class="avatar">
                        </div>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label> -->

                                <div class="col-md-12">
                                    <input id="email" type="email" class="form-control emaillogin" name="email" value="{{ old('email') }}" placeholder="Email Adress" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <!-- <label for="password" class="col-md-4 control-label">Password</label> -->

                                <div class="col-md-12">
                                    <input id="password" type="password" placeholder="Password" class="form-control passwordlogin" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-2">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-12 col-md-offset-2">
                                    <button type="submit" style="width: 80px;" class="btn btn-primary col-md-12">
                                        Login
                                    </button>
                                    <!-- navbar-defaul -->

                                    <a class="btn btn-link col-md-12"  href="{{ route('password.request') }}">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>

    </div>
  </header>
@endsection
