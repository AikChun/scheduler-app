<!DOCTYPE html>
<html lang="en">
<head>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- Styles -->
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">-->
  <link rel="stylesheet" href="/css/materialize.css"> <!-- From gulp -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Laravel</title>

<!-- Fonts -->

</head>
<body id="app-layout">
<nav>
  <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
  <div class="nav-wrapper">
      <a href="#" class="brand-logo" style="padding-left:1cm;">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">JavaScript</a></li>

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
      </ul>
    </div>
  <ul id="slide-out" class="side-nav ">
      <li class="bold"><a href="#!" class="waves-effect waves-teal">First Sidebar Link</a></li>
      <li class="bold"><a href="#!" class="">Second Sidebar Link</a></li>
      <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
          <li>
            <a class="collapsible-header waves-effect waves-teal">Dropdown<i class="mdi-navigation-arrow-drop-down"></i></a>
            <div class="collapsible-body">
              <ul>
                <li><a href="#!">First</a></li>
                <li><a href="#!">Second</a></li>
                <li><a href="#!">Third</a></li>
                <li><a href="#!">Fourth</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </li>
    </ul>
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

  <script type="text/javascript" src="/js/materialize.js"></script>         
  <script >// Initialize collapse button
    $(document).ready(function() {
      $('.button-collapse').sideNav({
          menuWidth: 300, // Default is 240
          closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
        }
      );

      $('.button-collapse').sideNav('hide');
    });
  </script>
  </body>
</html>
