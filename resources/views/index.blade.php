@extends('layouts.app')
@section('content')
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-item set-bg" data-setbg="{{ asset('images/hero-slider/hero-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-text">
                                <h2>Welcome to</h2>
                                <h1>FItness Error</h1>
                                <a href="#" class="primary-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="{{ asset('images/hero-slider/hero-2.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-text">
                                <h2>Project by</h2>
                                <h1>error space</h1>
                                <a href="#" class="primary-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-hero-item set-bg" data-setbg="{{ asset('images/hero-slider/hero-3.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hero-text">
                                <h2>Create your</h2>
                                <h1>Account</h1>
                                <a href="#" class="primary-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- About Section Begin -->
    <section class="home-about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2>WELCOME TO FITNESS ERROR</h2>
                        <p class="short-details">CrossFit is a cutting-edge functional fitness system that can help
                            everyday men.</p>
                        <p class="long-details">Success isn’t really that difficult. There is a significant portion of
                            the population here in North America, that actually want and need success to be hard! For
                            those of you who are serious about having more, doing more, giving more and being more.</p>
                        <a href="#" class="primary-btn about-btn">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-img">
                        <img src="{{ asset('images/home-about.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- Choseus Section Begin -->
    <section class="chooseus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Why People Choose Us</h2>
                        <p>Our sport experts and latest sports equipment are the winning combination.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-1.png') }}" alt="">
                        <h5>Support 24/24</h5>
                        <p>One of the best ways to make a great vacation quickly horrible is to choose the wrong
                            accommodations for your trip. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-2.png') }}" alt="">
                        <h5>Our trainer</h5>
                        <p>If you are an infrequent traveler you may need some tips to keep the wife happy while you are
                            jet setting around the globe.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-3.png') }}" alt="">
                        <h5>Personalized sessions</h5>
                        <p>To succeed at any endeavor, you must stay the course…no matter what the cost! Here are some
                            surefire tips to help you on your journey.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-4.png') }}" alt="">
                        <h5>Our equipment</h5>
                        <p>Rugby and Stratford-upon-Avon. Additionally, there are many things to see and do in and
                            around Coventry itself.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-5.png') }}" alt="">
                        <h5>Classes daily</h5>
                        <p>We would just not have the will in us to go about our daily lives. Its motivation that helps
                            us get through the most mundane.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="choose-item">
                        <img src="{{ asset('images/icons/chose-icon-6.png') }}" alt="">
                        <h5>Focus on your health</h5>
                        <p>But there is only so far we can go within the constraints of a family budget in building the
                            perfect telescopic operation.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Choseus Section End -->

    <!-- Video Section Begin -->
    <section class="video-section set-bg" data-setbg="{{ asset('images/video-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Gym In Dowtown New York</h2>
                        <a href="https://www.youtube.com/watch?v=X_9VoqR5ojM" class="play-btn video-popup">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

    <!-- Cta Section Begin -->
    <section class="cta-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-text">
                        <h3>GeT Started Today</h3>
                        <p>New student special! $30 unlimited Gym for the first week anh 50% of our member!</p>
                    </div>
                    <a href="#" class="primary-btn cta-btn">book now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Cta Section End -->
@endsection
