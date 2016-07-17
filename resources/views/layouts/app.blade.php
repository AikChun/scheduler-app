<!DOCTYPE html>
<html lang="en">

<!--================================================================================
Item Name: Materialize - Material Design Admin Template
Version: 3.1
Author: GeeksLabs
Author URL: http://www.themeforest.net/user/geekslabs
================================================================================ -->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="msapplication-tap-highlight" content="no">
<meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
<meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
<title>Materialize - Material Design Admin Template</title>

<!-- Favicons-->
<link rel="icon" href="/images/favicon/favicon-32x32.png" sizes="32x32">
<!-- Favicons-->
<link rel="apple-touch-icon-precomposed" href="/images/favicon/apple-touch-icon-152x152.png">
<!-- For iPhone -->
<meta name="msapplication-TileColor" content="#00bcd4">
<meta name="msapplication-TileImage" content="/images/favicon/mstile-144x144.png">
<!-- For Windows Phone -->


<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- CORE CSS-->    
<link href="/css/main.css" type="text/css" rel="stylesheet" media="screen,projection">
<!-- CSS for full screen (Layout-2)-->    
<link href="/css/layouts/style-fullscreen.css" type="text/css" rel="stylesheet" media="screen,projection">
<!-- Custome CSS-->    
<link href="/css/custom/custom.css" type="text/css" rel="stylesheet" media="screen,projection">


</head>

<body>
<!-- Start Page Loading -->
<div id="loader-wrapper">
    <div id="loader"></div>        
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- End Page Loading -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="navbar-color">
            <div class="nav-wrapper">
                <ul class="left">                      
                    <li><h1 class="logo-wrapper"><a href="/home" class="brand-logo darken-1 center">Scheduler</a> <span class="logo-text">Materialize</span></h1></li>
                </ul>
                <ul class="right hide-on-med-and-down">

                    <!--<li><a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button"  data-activates="translation-dropdown"><img src="images/flag-icons/United-States.png" alt="USA" /></a>
                    </li>-->
                    </li>                        
                    @if(Auth::user())
                        <li>
                    <a class="waves-effect waves-block waves-light dropdown-button" href="#!" data-activates="user-profile-dropdown">{{ Auth::user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i>
                    </a>
                @else 
                    <a href="/login" class="waves-effect waves-block waves-light ">Login<!--<i class="mdi-communication-chat"></i>--></a>
                @endif
                </li>

            </ul>
            @if(Auth::user())

                <ul id="user-profile-dropdown" class="dropdown-content">
                <li><a href="#"> Profile</a>
                </li>
                <li><a href="#"> Settings</a>
                </li>
                <li><a href="#"> Help</a>
                </li>
                <li class="divider"></li>
                <li><a href="#"> Lock</a>
                </li>
                <li><a href="#"> Logout</a>
                </li>
            </ul>
            <!--<ul id="user-profile-dropdown" class="dropdown-content">
            <li><a href="#!">Profile</a></li>
            <li class="divider"></li>
            <li><a href="/logout">Logout</a></li>
            </ul>-->
        @endif
        <!-- translation-button -->
        <!--<ul id="translation-dropdown" class="dropdown-content">
        <li>
        <a href="#!"><img src="images/flag-icons/United-States.png" alt="English" />  <span class="language-select">English</span></a>
        </li>
        <li>
        <a href="#!"><img src="images/flag-icons/France.png" alt="French" />  <span class="language-select">French</span></a>
        </li>
        <li>
        <a href="#!"><img src="images/flag-icons/China.png" alt="Chinese" />  <span class="language-select">Chinese</span></a>
        </li>
        <li>
        <a href="#!"><img src="images/flag-icons/Germany.png" alt="German" />  <span class="language-select">German</span></a>
        </li>

        </ul>-->
        <!-- notifications-dropdown -->
        <ul id="notifications-dropdown" class="dropdown-content">
            <li>
            <h5>NOTIFICATIONS <span class="new badge">5</span></h5>
            </li>
            <li class="divider"></li>
            <li>
            <a href="#!"><i class="mdi-action-add-shopping-cart"></i> A new order has been placed!</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
            </li>
            <li>
            <a href="#!"><i class="mdi-action-stars"></i> Completed the task</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
            </li>
            <li>
            <a href="#!"><i class="mdi-action-settings"></i> Settings updated</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
            </li>
            <li>
            <a href="#!"><i class="mdi-editor-insert-invitation"></i> Director meeting started</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
            </li>
            <li>
            <a href="#!"><i class="mdi-action-trending-up"></i> Generate monthly report</a>
            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
            </li>
        </ul>


    </div>
</nav>
</div>
<!-- end header nav-->
</header>
<!-- END HEADER -->

<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- START MAIN -->
<div id="main">
<!-- START WRAPPER -->
<div class="wrapper">

@if(Auth::user()) 
    <!-- START LEFT SIDEBAR NAV-->
<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav leftside-navigation">
        <li class="user-details cyan darken-2">
        <div class="row">
            <div class="col col s4 m4 l4">
                <img src="/images/BlankProfile.jpeg" alt="" class="circle responsive-img valign profile-image">
            </div>
            <div class="col col s8 m8 l8">
                <ul id="profile-dropdown" class="dropdown-content">
                    <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                    </li>
                    <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>
                    </li>
                    <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>
                    </li>
                    <li><a href="#"><i class="mdi-hardware-keyboard-tab"></i> Logout</a>
                    </li>
                </ul>
                <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ Auth::user()->name }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                <p class="user-roal">Role</p>
            </div>
        </div>
        </li>
        <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
        </li>
        <li class="no-padding">
        <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header waves-effect waves-cyan "><i class="mdi-action-view-carousel"></i> Modules</a>
            <div class="collapsible-body">
                <ul>
                    <li class="active"><a href="/modules/create">Add</a>
                    </li>
                </ul>
            </div>
            </li>
        </ul>
        <!--<ul class="collapsible collapsible-accordion">
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan active"><i class="mdi-action-view-carousel"></i> Layouts</a>
        <div class="collapsible-body">
        <ul>
        <li class="active"><a href="layout-fullscreen.html">Full Screen</a>
        </li>
        <li><a href="layout-horizontal-menu.html">Horizontal Menu</a>
        </li>
        </ul>
        </div>
        </li>
        </ul>-->
        </li>
    </ul>
    <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light cyan" ><i class="mdi-navigation-menu"></i></a>
</aside>
            @endif
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">
                    <div class="section">
                    @yield('content')
                    </div>
                </div>
            </section>
            <!-- ================================================
            Scripts
            ================================================ -->

            <!-- jQuery Library -->
            <script type="text/javascript" src="/js/plugins/jquery-1.11.2.min.js"></script>
            <!--materialize js-->
            <script type="text/javascript" src="/js/main.js"></script>
            <!--scrollbar-->
            <script type="text/javascript" src="/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>


            <!-- Toast Notification -->

            </body>

            </html>
