<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Aldos</title>
    <link href="{{url('bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{url('/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <link href=".{{url('plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <link href="{{url('plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <link href="{{url('plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{url('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <link href="{{url('css/animate.css')}}" rel="stylesheet">
    <link href="{{url('css/style.css')}}" rel="stylesheet">

    <link href="{{url('css/colors/default.css')}}" id="theme" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <a class="logo" href="{{url('admin')}}">
                        <b>
                        <img src="{{url('plugins/images/admin-logo.png')}}" alt="home" class="dark-logo" /><img src="{{url('plugins/images/admin-logo-dark.png')}}" alt="home" class="light-logo" />
                     </b>
                        <span class="hidden-xs">
                        <!-- <img src="../plugins/images/admin-text.png" alt="home" class="dark-logo" /><img src="../plugins/images/admin-text-dark.png" alt="home" class="light-logo" /> -->
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{Auth::user()->name}}</b><span class="caret"></span> </a>
                        <ul class="dropdown-menu dropdown-user animated flipInY">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="../plugins/images/users/varun.jpg" alt="user" /></div>
                                    <div class="u-text">
                                        <h4>{{Auth::user()->name}}</h4>
                                        <p class="text-muted">{{Auth::user()->email}}</p><!--<a href="profile.html" class="btn btn-rounded btn-danger btn-sm">Ver Perfil</a>--></div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <!--<li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                            <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                            <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>-->
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-power-off"></i> Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                                        
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span><span class="hide-menu"></span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <!-- <li style="padding: 70px 0 0;"><a href="#" class="waves-effect"><i class="fa fa-clone fa-fw" aria-hidden="true"></i>Inicio<span class="fa arrow"></span><span class="label label-rouded label-warning pull-right">3</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#"><i class="fa fa-hourglass-start fa-fw" aria-hidden="true"></i>Slide</a></li>
                            <li><a href="#"><i class="fa fa-columns fa-fw" aria-hidden="true"></i>Frames</a></li>
                            <li><a href="#"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>Lista de Tiendas</a></li>
                        </ul>
                    </li> -->
                    <li style="padding: 70px 0 0;"><a href="{{url('Inicio')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Inicio</a> </li>
                    <li><a href="{{url('MundoAldoAdm')}}" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>El Mundo de Aldo</a> </li>
                    <li><a href="{{url('NoviosAdm')}}"><i class="fa fa-comment-o fa-fw" aria-hidden="true"></i>Novios</a></li>
                    <li><a href="{{url('JoyasAdm')}}"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Joyas</a></li>
                    <li class="devider"></li>
                    <li><a href="#"><i class="fa fa-file-o fa-fw" aria-hidden="true"></i>Patek Philippe</a></li>
                    <li><a href="{{url('Eventos')}}"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Eventos</a></li>
                    <li><a href="{{url('Marcket')}}"><i class="fa fa-font fa-fw" aria-hidden="true"></i>Contáctenos</a></li>
                    <!-- <li><a href="#" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Google Map</a></li>
                    <li><a href="#" class="waves-effect"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>Vector Map</a></li> -->
                    
                    <!-- <li><a href="javascript:void(0)" class="waves-effect"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="javascript:void(0)">Second Level Item</a></li>
                            <li><a href="javascript:void(0)">Second Level Item</a></li>
                            <li><a href="javascript:void(0)" class="waves-effect">Third Level <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="javascript:void(0)">Third Level Item</a></li>
                                    <li><a href="javascript:void(0)">Third Level Item</a></li>
                                    <li><a href="javascript:void(0)">Third Level Item</a></li>
                                    <li><a href="javascript:void(0)">Third Level Item</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li> -->
                    <li><a href="#" class="waves-effect"><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i>Log In</a></li>
                    <li class="devider"></li>
                    
                </ul>
            </div>
        </div>
        <div id="page-wrapper">
            @yield('content')
            <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by themedesigner.in </footer>
        </div>

    </div>
    <script src="{{url('plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{url('bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{url('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <script src="{{url('js/jquery.slimscroll.js')}}"></script>
    <script src="{{url('js/waves.js')}}"></script>
    <script src="{{url('plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{url('plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <script src="{{url('plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{url('plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <script src="{{url('plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{url('js/custom.min.js')}}"></script>
    <script src="{{url('js/dashboard1.js')}}"></script>
    <script src="{{url('plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
    <script src="{{url('plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
    <script src="{{url('js/custom.min.js')}}"></script>
    <script src="{{url('js/jasny-bootstrap.js')}}"></script>
        @yield('script')
    
</body>

</html>
