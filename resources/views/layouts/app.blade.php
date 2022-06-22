<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700&display=swap" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/themes/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/elegant-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/slicknav.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themes/style.css') }}">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="logo">
                <a href="./index.html">
                    <img src="{{ asset('images/logo.png') }}" alt="">
                </a>
            </div>
            <div class="top-social">
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </div>
            <div class="container">
                <div class="nav-menu">
                    <nav class="mainmenu mobile-menu">
                        <ul>
                            <li class="{{ Route::currentRouteNamed('index') ? 'active' : '' }}"><a href="{{ route('index') }}">Home</a></li>
                            <li class="{{ Route::currentRouteNamed('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About us</a></li>
                            <li class="{{ Route::currentRouteNamed('Schedule') ? 'active' : '' }}"><a href="./schedule.html">Schedule</a></li>
                            <li class="{{ Route::currentRouteNamed('Schedule') ? 'active' : '' }}"><a href="./gallery.html">Gallery</a></li>
                            <li class="{{ Route::currentRouteNamed('Schedule') ? 'active' : '' }}"><a href="./blog.html">Blog</a>
                                <ul class="dropdown">
                                    <li class="{{ Route::currentRouteNamed('Schedule') ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                                    <li class="{{ Route::currentRouteNamed('Schedule') ? 'active' : '' }}"><a href="./blog-single.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li class="{{ Route::currentRouteNamed('account') ? 'active' : '' }}"><a href="{{ route('account.index') }}">GYM</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <main>
        @yield('content')
    </main>

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-logo-item">
                        <div class="f-logo">
                            <a href="#"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>
                        <p>Despite growth of the Internet over the past seven years, the use of toll-free phone
                            numbers
                            in television advertising continues.</p>
                        <div class="social-links">
                            <h6>Follow us</h6>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Our Blog</h5>
                        <div class="footer-blog">
                            <a href="#" class="fb-item">
                                <h6>Most people who work</h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                            <a href="#" class="fb-item">
                                <h6>Freelance Design Tricks How </h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                            <a href="#" class="fb-item">
                                <h6>have a computer at home have had </h6>
                                <span class="blog-time"><i class="fa fa-clock-o"></i> Jan 02, 2019</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>Program</h5>
                        <ul class="workout-program">
                            <li><a href="#">Bodybuilding</a></li>
                            <li><a href="#">Running</a></li>
                            <li><a href="#">Streching</a></li>
                            <li><a href="#">Weight Loss</a></li>
                            <li><a href="#">Gym Fitness</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-widget">
                        <h5>Get Info</h5>
                        <ul class="footer-info">
                            <li>
                                <i class="fa fa-phone"></i>
                                <span>Phone:</span>
                                (12) 345 6789
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                <span>Email:</span>
                                Colorlib.info@gmail.com
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Address</span>
                                Iris Watson, Box 283 8562, NY
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="ct-inside">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved by <a href="#"
                                target="_blank">Errorspace</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->
    <div id="app">
    </div>
</body>


<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>

<script src="{{ asset('js/themes/jquery-3.3.1.min.js') }}  "></script>
<script src="{{ asset('js/themes/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/themes/mixitup.min.js') }}"></script>
<script src="{{ asset('js/themes/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('js/themes/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/themes/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/themes/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/themes/main.js') }}"></script>

</html>
