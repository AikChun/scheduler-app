@extends('layouts.app')

@section('content')
    <div class="row">
       <div class="col s12 m6 l6 offset-l3 offset-m3">
          <div class="card">
            <div class="card-content">
                <span class="card-title">Login</span>
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12 m12 l12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="validate" name="email">
                            <label for="email" data-error="Please supply a valid email" data-success="">Email</label>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                          </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12 m12 l12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="password" type="password" class="validate" name="password">
                        <label for="password">Password</label>

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                      </div>  
                    </div>

                  <div class="row">
                    <div class="input-field col s12 m12 l12">
                          <input type="checkbox" class="input-field filled-in" id="remember_me" name="remember" />
                          <label for="remember_me">Remember me</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="input-field col s12 m12 l12">
                        <button type="submit" class="btn btn-primary col s12">
                            <i class="fa fa-btn fa-sign-in"></i>Login
                        </button>

                        <!-- <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>-->
                    </div> 
                  </div>

                  <div class="row">
                      <div class="input-field col s6 m6 l6">
                          <p class="margin medium-small">
                            <a  href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                          </p>
                      </div>
                      <div class="input-field col s6 m6 l6">
                          <p class="margin right-align medium-small">
                            <a href="{{ url('/register') }}">Register</a>
                          </p>
                      </div>
                  </div>
                  </div>
                        
                </form>
            </div>
          </div>
      </div> 
        
    </div>
@endsection
