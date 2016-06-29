<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

<!-- Fonts -->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- Styles -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
  <link rel="stylesheet" href="/css/materialize.css"> <!-- From gulp -->
{{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

</head>
<body id="app-layout">
  <nav>
      <div class="nav-wrapper">
        <a href="#" class="brand-logo">Scheduler</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            @if (Auth::guest())
            <li><a href="{{ url('/login') }}">Login</a></li>
            <li><a href="{{ url('/register') }}">Register</a></li>
          @else
            <ul id="userProfileDropDown" class="dropdown-content">
              <li><a href="{{ url('/logout') }}">Logout</a></li>
              <li><a href="#!">two</a></li>
              <li class="divider"></li>
              <li><a href="#!">three</a></li>
            </ul>
            <li class="dropdown">

              <ul id="userProfileDropDown" class="dropdown-content">
                <li><a href="{{ url('/logout') }}">Logout</a></li>
                <li><a href="#!">two</a></li>
                <li class="divider"></li>
                <li><a href="#!">three</a></li>
              </ul>
              <li>
              <a class="dropdown-button" href="#!" data-activates="userProfileDropDown">{{ Auth::user()->name }}
                <i class="material-icons right">arrow_drop_down</i>
              </a>
              </li>
            </li>
        @endif
      </ul>
    </div>
  </nav>

  @yield('content')
<!--<footer class="page-footer">
<div class="container">
<div class="row">
<div class="col l6 s12">
<h5 class="white-text">Footer Content</h5>
<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
</div>
<div class="col l4 offset-l2 s12">
<h5 class="white-text">Links</h5>
<ul>
<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
</ul>
</div>
</div>
</div>
<div class="footer-copyright">
<div class="container">
© 2016 Copyright Text
<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
</div>
</div>
</footer>-->
<!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="/js/materialize.min.js"></script>         
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  </body>
</html>
