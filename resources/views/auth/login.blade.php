@extends('layouts.app')

@include('forms.validation_css')
@section('content')
    <div class="row">
       <div class="col s12 m6 l6 offset-l3 offset-m3">
          <div class="card">
            <div class="card-content">
                <span class="card-title">Login</span>
                <form class="form-horizontal" id="login_form" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="input-field col s12 m12 l12 ">
                            <input id="email" type="email" class="validate" name="email" data-error=".errorTxt1">
                            <label for="email" >Email</label>
                            <div class="errorTxt1"></div>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                          </div>
                    </div>
                    <div class="row">
                      <div class="input-field col s12 m12 l12 ">
                        <input id="password" type="password" name="password" data-error=".errorTxt2">
                        <label for="password">Password</label>
                        <div class="errorTxt2"></div>

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

@section('js')
@include('forms.validation_js')
<script type="text/javascript">
$(document).ready(function () {
  //your code here

    $("#login_form").validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
              required: true
            }
        },
        //For custom messages
        messages: {
            email: {
              required: "Enter an email",
              email: "Input has to be in the format of 'example@examplemail.com'"
            },
            password: {
              required: "Enter a password"
            }
        },
        errorElement : 'div',
        errorPlacement: function(error, element) {
          var placement = $(element).data('error');
          if (placement) {
            $(placement).append(error)
          } else {
            error.insertAfter(element);
          }
        }
     });
    });
</script>
@endsection
