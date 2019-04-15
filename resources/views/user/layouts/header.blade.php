<meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- favicon -->        
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('user/img/logo/log1.png')}}">

        <!-- all css here -->
        
@section('header')

@stop

        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="{{asset('user/css/bootstrap.min.css')}}">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="{{asset('user/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/owl.transitions.css')}}">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{asset('user/css/meanmenu.min.css')}}">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{asset('user/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/icon.css')}}">
        <link rel="stylesheet" href="{{asset('user/css/flaticon.css')}}">
        <!-- magnific css -->
        <link rel="stylesheet" href="{{asset('user/css/magnific.min.css')}}">
        <!-- venobox css -->
        <link rel="stylesheet" href="{{asset('user/css/venobox.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('user/style.css')}}">
        <link rel="stylesheet" href="{{asset('user/wnbcss/pagess.css')}}">
        <!-- responsive css -->
        <link rel="stylesheet" href="{{asset('user/css/responsive.css')}}">
        
        


        <!-- modernizr css -->
        <script src="{{asset('user/js/vendor/modernizr-2.8.3.min.js')}}"></script>




    <!-- </head> -->
  <body class="home-2">

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- <div id="preloader"></div> -->
        <div></div>
        <header class="header-two">
            <!-- Start top bar -->
            <div class="topbar-area topbar-area-2 fix hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class=" col-md-6 col-sm-6">
                            <div class="topbar-left">
                                  
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="topbar-right">
                                <div class="top-social">
                                    <ul>
                                    <li><a href="#"><i class="fa fa-envelope"></i> wnbhost@gmail.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i> +62 877-8926-7402</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i> Mon-Fri 10am-5pm</a></li>
                                </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <!-- header-area start -->
            <div id="sticker" class="header-area header-area-2 hidden-xs">
                <div class="container">
                    <div class="row">
                        <!-- logo start -->
                        <div class="col-md-3 col-sm-3">
                            <div class="logo">
                                <!-- Brand -->
                                <a class="navbar-brand page-scroll sticky-logo" href="#">
                                    <img src="{{asset('user/img/logo/logo1.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <!-- logo end -->
                        <div class="col-md-9 col-sm-9">
                            <!-- mainmenu start -->
                            <nav class="navbar navbar-default">
                                <div class="collapse navbar-collapse" id="navbar-example">
                                    <div class="main-menu">
                                        <ul class="nav navbar-nav navbar-right">
                                            <li ><a class="pagess" href="{{ URL::to('/')}} ">Home</a></li>
                                            <li><a class="pagess" href="{{ route('about') }} ">About us</a></li>
                                            <li><a class="pagess" href="{{ route('services') }}"> Services</a>
                                                 <ul class="sub-menu">
                                            <li><a href="{{route('construction')}} ">Construction</a></li>
                                            <li><a href="{{route('advisory')}} ">Advisory</a></li>
                                            <li><a href="{{route('it_service')}} ">Information Technology</a></li>
                                        </ul>

                                            </li>

                                            <li><a class="pagess" href="{{ route('project') }}">Projects</a></li>
                                            <li><a class="pagess" href="{{ route('news') }}">News</a></li>
                                            <li><a class="pagess" href="{{ route('contacts.index') }}">Contact us</a></li>
                                            <li>
                                               
                                                @if (Auth::guest())

                                                <a class="pagess" href="{{ route('login') }}">login</a>
                                                    
                                                @else
                                                <a class="pagess" href="#">{{Auth::user()->name}}</a>
                                                    <ul class="sub-menu">
                                                <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                                </a></li> 

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                
                                                @endif 
                                                    </ul>   
                                                
                                                
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <!-- mainmenu end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-area end -->
            <!-- mobile-menu-area start -->
            <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <div class="logo">
                                    <a href="#"><img src="{{asset('user/img/logo/logo2.png')}}" alt="" /></a>
                                </div>
                                <nav id="dropdown">
                                    <ul>
                                        <li class="active"><a class="pagess" href="#">Home</a></li>
                                        <li><a class="pagess" href="{{ route('about') }}  ">About us</a></li>
                                        <li><a class="pagess" href="{{ route('services') }}">Services</a></li>
                                        <ul class="sub-menu">
                                            <li><a href="">Construction</a></li>
                                            <li><a href="">Advisory</a></li>
                                            <li><a href="">Information Technology</a></li>
                                        </ul>
                                        <li><a class="pagess" href="{{route('project')}}">Projects</a></li>
                                        <li><a class="pagess" href="{{route('news')}}">News</a></li>
                                        <li><a class="pagess" href="{{ route('contacts.index') }}">Contact us</a></li>
                                    </ul>
                                </nav>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
            <!-- mobile-menu-area end -->       
        </header>
        <!-- header end -->