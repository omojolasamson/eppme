<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eppme') }}</title>

    <!-- Styles -->
    <!--<link href="/css/app.css" rel="stylesheet">-->



    <link rel="stylesheet" href="/css/w3.css">
    <link rel="stylesheet" href="/css2/bootstrap.min.css">
    <link rel="stylesheet" href="/css2/font-awesome.min.css">
    <link rel="stylesheet" href="/css2/animate.min.css">
    <link rel="stylesheet" href="/css2/et-line-font.css">
    <link rel="stylesheet" href="/css2/nivo-lightbox.css">
    <link rel="stylesheet" href="/css2/nivo_themes/default/default.css">
    <link rel="stylesheet" href="/css2/style.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>



    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <div id="app">


        @if(!Auth::guest())
            <div class="w3-sidebar w3-bar-block w3-dark-grey" style="width:20%">
                <a href="#" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-home"></i>&nbspHome</a>
                <a href="#" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-eye"></i>&nbspView Your Pings</a>
                <a href="#" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-eye"></i>&nbspView Your Profile</a>
                <a href="#" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-user"></i>&nbspContact Eepme</a>
                @if(Auth::user()->role_id > 2)
                    <a href="#" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-eye"></i>&nbspView All Pings</a>
                    <a href="#" class="w3-bar-item w3-button w3-border-bottom"><i class="fa fa-eye"></i>&nbspView All Users</a>
                @endif
            </div>
        @endif
        <section class="navbar navbar-static-top custom-navbar2 w3-border w3-card-4" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a class="navbar-brand w3-button w3-border w3-card-4" style="font-size: 18px;" href="{{ url('/') }}">
                        {{ config('app.name', 'laravel') }}
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right w3-border w3-card-4">
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/pingView') }}"
                                        >
                                            View Your Pings
                                        </a>
                                    </li>
                                    @if(Auth::user()->role_id > 2)
                                        <li>
                                            <a href="{{ url('/allPings') }}"
                                            >
                                                View All Pings
                                            </a>
                                        </li>
                                    @endif
                                    @if(Auth::user()->role_id > 2)
                                        <li>
                                            <a href="{{ url('/allUsers') }}"
                                            >
                                                View All Users
                                            </a>
                                        </li>
                                    @endif
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </section>




        <div>
            @yield('content')
        </div>



    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <p>Copyright © Eppme</p>
                    <hr>
                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                        <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
                        <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
                        <li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.9s"></a></li>
                        <li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="0.9s"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="js2/jquery.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/smoothscroll.js"></script>
    <script src="js2/isotope.js"></script>
    <script src="js2/imagesloaded.min.js"></script>
    <script src="js2/nivo-lightbox.min.js"></script>
    <script src="js2/jquery.backstretch.min.js"></script>
    <script src="js2/wow.min.js"></script>
    <script src="js2/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>



</body>
</html>
