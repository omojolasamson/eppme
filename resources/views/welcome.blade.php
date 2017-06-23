<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <meta name="keywords" content="">
        <meta name="description" content="">

        <link rel="stylesheet" href="/css2/bootstrap.min.css">
        <link rel="stylesheet" href="/css2/font-awesome.min.css">
        <link rel="stylesheet" href="css2/animate.min.css">
        <link rel="stylesheet" href="css2/et-line-font.css">
        <link rel="stylesheet" href="css2/nivo-lightbox.css">
        <link rel="stylesheet" href="css2/nivo_themes/default/default.css">
        <link rel="stylesheet" href="css2/style.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500' rel='stylesheet' type='text/css'>




        <title>Emergency Report</title>



        <!-- Styles -->

    </head>
    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">



        <!-- preloader section -->
        <div class="preloader">
            <div class="sk-spinner sk-spinner-circle">
                <div class="sk-circle1 sk-circle"></div>
                <div class="sk-circle2 sk-circle"></div>
                <div class="sk-circle3 sk-circle"></div>
                <div class="sk-circle4 sk-circle"></div>
                <div class="sk-circle5 sk-circle"></div>
                <div class="sk-circle6 sk-circle"></div>
                <div class="sk-circle7 sk-circle"></div>
                <div class="sk-circle8 sk-circle"></div>
                <div class="sk-circle9 sk-circle"></div>
                <div class="sk-circle10 sk-circle"></div>
                <div class="sk-circle11 sk-circle"></div>
                <div class="sk-circle12 sk-circle"></div>
            </div>
        </div>

        <!-- navigation section -->
        <section class="navbar navbar-fixed-top custom-navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                        <span class="icon icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">Eppme</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                            @if (Route::has('login'))
                                    @if (Auth::check())
                                        <li><a href="{{ url('/home') }}" class="smoothScroll">Home</a></li>
                                    @else
                                        <li><a href="{{ url('/login') }}" class="smoothScroll">Login</a></li>
                                        <li><a href="{{ url('/register') }}" class="smoothScroll">Register</a></li>
                                    @endif
                            @endif
                    </ul>
                </div>
            </div>
        </section>

        <!-- home section -->
        <section id="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <!--<h3>WEB DESIGN / WEB DEVELOPMENT / SOCIAL MEDIA</h3>-->
                        <h1>REPORT YOUR EMERGENCY</h1>
                        <hr>
                        <a href="{{ url('/home') }}" class="smoothScroll btn btn-danger">Send a Ping</a>
                        <a href="#contact" class="smoothScroll btn btn-default">Talk to us</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- work section -->
        <section id="work">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title">
                            <h1 class="heading bold">WHAT WE DO</h1>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
                        <i class="icon-cloud medium-icon"></i>
                        <h3>LOREM IPSUM</h3>
                        <hr>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="0.9s">
                        <i class="icon-mobile medium-icon"></i>
                        <h3>LOREM IPSUM</h3>
                        <hr>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-laptop medium-icon"></i>
                        <h3>LOREM IPSUM</h3>
                        <hr>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-compass medium-icon"></i>
                        <h3>LOREM IPSUM</h3>
                        <hr>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-chat medium-icon"></i>
                        <h3>LOREM IPSUM</h3>
                        <hr>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 wow fadeInUp" data-wow-delay="1s">
                        <i class="icon-browser medium-icon"></i>
                        <h3>LOREM IPSUM</h3>
                        <hr>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia.</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- team section -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="section-title">
                            <h1 class="heading bold">ORGANIZATIONS WE WORK WITH</h1>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.9s">
                        <div class="team-wrapper">
                            <img src="images2/team1.jpg" class="img-responsive" alt="team img">
                            <div class="team-des">
                                <h4>Cindy</h4>
                                <h3>Senior Designer</h3>
                                <hr>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                                    <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
                                    <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.3s">
                        <div class="team-wrapper">
                            <img src="images2/team2.jpg" class="img-responsive" alt="team img">
                            <div class="team-des">
                                <h4>Mary</h4>
                                <h3>Core Developer</h3>
                                <hr>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                                    <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
                                    <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
                        <div class="team-wrapper">
                            <img src="images2/team3.jpg" class="img-responsive" alt="team img">
                            <div class="team-des">
                                <h4>Linda</h4>
                                <h3>Manager</h3>
                                <hr>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                                    <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
                                    <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 wow fadeIn" data-wow-delay="1.6s">
                        <div class="team-wrapper">
                            <img src="images2/team4.jpg" class="img-responsive" alt="team img">
                            <div class="team-des">
                                <h4>Sandar</h4>
                                <h3>Accountant</h3>
                                <hr>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                                    <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
                                    <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.9s"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- contact section -->
        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <div class="section-title">
                            <h1 class="heading bold">CONTACT US</h1>
                            <hr>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 contact-info">
                        <h2 class="heading bold">CONTACT INFO</h2>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteu sunt in culpa qui officia deserunt mollit anim id.</p>
                        <div class="col-md-6 col-sm-4">
                            <h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
                            <p>hello@company.com</p>
                        </div>
                        <div class="col-md-6 col-sm-4">
                            <h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> PHONES</h3>
                            <p>010-020-0340 | 090-080-0760</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <form action="#" method="get" class="wow fadeInUp" data-wow-delay="0.6s">
                            <div class="col-md-6 col-sm-6">
                                <input type="text" class="form-control" placeholder="Name" name="name">
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="form-control" placeholder="Message" rows="7" name="message"></textarea>
                            </div>
                            <div class="col-md-offset-4 col-md-8 col-sm-offset-4 col-sm-8">
                                <input type="submit" class="form-control" value="SEND MESSAGE">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- footer section -->
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


        <script src="js2/jquery.js"></script>
        <script src="js2/bootstrap.min.js"></script>
        <script src="js2/smoothscroll.js"></script>
        <script src="js2/isotope.js"></script>
        <script src="js2/imagesloaded.min.js"></script>
        <script src="js2/nivo-lightbox.min.js"></script>
        <script src="js2/jquery.backstretch.min.js"></script>
        <script src="js2/wow.min.js"></script>
        <script src="js2/custom.js"></script>

    </body>
</html>
