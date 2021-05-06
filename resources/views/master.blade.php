
<!doctype html>
<html class="no-js" lang="en">

<head>

    @include('home.partials.stylesheet')

</head>

<body>
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status"><img src="{{ asset('assets/frontend/images/banner/loader.gif')}}" id="preloader_image" alt="loader">
        </div>
    </div>
    <!--Header area start here-->
    <div section-scroll='0' class="wd_scroll_wrap">

        @include('home.partials.header')
        <!--Header area end here-->
        <!--Slider area start here-->
        <section class="slider-area">
            <canvas>
                <script src="{{ asset('assets/frontend/js/three.js') }}"></script>
                <script src="{{ asset('assets/frontend/js/stats.min.js') }}"></script>
                <script src="{{ asset('assets/frontend/js/Projector.js') }}"></script>
                <script src="{{ asset('assets/frontend/js/CanvasRenderer.js') }}"></script>
            </canvas>
            <div id="particles-js">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="carousel-captions caption-1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="slider-content">
                                                <ul>
                                                    <li data-animation="animated bounceInDown" class="slider_social_icon1"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li data-animation="animated bounceInDown" class="slider_social_icon2"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li data-animation="animated bounceInDown" class="slider_social_icon3"><a href="#"><i class="fa fa-send-o"></i></a></li>
                                                    <li data-animation="animated bounceInDown" class="slider_social_icon4"><a href="#"><i class="fa fa-bitcoin"></i></a></li>
                                                    <li data-animation="animated bounceInDown" class="slider_social_icon5"><a href="#"><i class="fa fa-envelope"></i></a></li>
                                                </ul>
                                                <h2 data-animation="animated bounceInLeft">Bit Money - Lending & <br>Investment Platform</h2>
                                                <div class="buttons">
                                                    <a href="#" class="btn1" data-animation="animated bounceInUp">WHITEPAPER</a>
                                                    <a href="#" class="btn2" data-animation="animated bounceInUp">Buy Tokens Now!</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs hidden-sm">
                                            <div class="btc_timer_section_wrapper">
                                                <div id="clockdiv">
                                                    <div>
                                                        <span class="days"></span>
                                                        <div class="smalltext">Days</div>
                                                    </div>
                                                    <div>
                                                        <span class="hours"></span>
                                                        <div class="smalltext">Hours</div>
                                                    </div>
                                                    <div>
                                                        <span class="minutes"></span>
                                                        <div class="smalltext">Minutes</div>
                                                    </div>
                                                    <div>
                                                        <span class="seconds"></span>
                                                        <div class="smalltext">Seconds</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                        <div class="slider-content">
                                            <ul>
                                                <li data-animation="animated bounceInDown" class="slider_social_icon1"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li data-animation="animated bounceInDown" class="slider_social_icon2"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li data-animation="animated bounceInDown" class="slider_social_icon3"><a href="#"><i class="fa fa-send-o"></i></a></li>
                                                <li data-animation="animated bounceInDown" class="slider_social_icon4"><a href="#"><i class="fa fa-bitcoin"></i></a></li>
                                                <li data-animation="animated bounceInDown" class="slider_social_icon5"><a href="#"><i class="fa fa-envelope"></i></a></li>
                                            </ul>
                                            <h2 data-animation="animated bounceInLeft">Bit Money - Lending & <br>Investment Platform</h2>
                                            <div class="buttons">
                                                <a href="#" class="btn1" data-animation="animated bounceInUp">WHITEPAPER</a>
                                                <a href="#" class="btn2" data-animation="animated bounceInUp">Buy Tokens Now!</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  hidden-xs hidden-sm">
                                        <div class="btc_timer_section_wrapper">
                                            <div id="clockdiv2">
                                                <div>
                                                    <span class="days"></span>
                                                    <div class="smalltext">Days</div>
                                                </div>
                                                <div>
                                                    <span class="hours"></span>
                                                    <div class="smalltext">Hours</div>
                                                </div>
                                                <div>
                                                    <span class="minutes"></span>
                                                    <div class="smalltext">Minutes</div>
                                                </div>
                                                <div>
                                                    <span class="seconds"></span>
                                                    <div class="smalltext">Seconds</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-nevigation">
                            <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="next" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!--About area start here-->
    <div section-scroll='1' class="wd_scroll_wrap">
        <section class="about-area pd-t70 pd-b100 jarallax bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <h2 class="f-40 fw-400 wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Who we are?</h2>
                            <p class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                We P.R. International a Bangladesh
                                based defence product supplier
                                company registered and exclusively
                                approved by Directorate General of
                                Defence Purchase (DGDP) under the
                                Ministry of Defence (MoD).

                                We are working with DGDP from
                                2003 and successfully deliver our
                                services. We serve all kinds of arms,
                                ammunition & aeroplane spare parts
                                for Bangladesh Defence.
                            </p>
                            <div class="buttons">
                                <a href="#" class="btn1">WHITEPAPER</a>
                                <a href="#" class="btn3">Buy Tokens Now!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about-img wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                            <img src="{{ asset('assets/frontend/images/about/1.png') }}" alt="">
                        </div>
                    </div>
                </div>

                <h6 class="f-40 fw-400 wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                    The best the market can offer
                </h6>
                <h2>We Serve</h2>
                <div class="row">
                    <div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="about-content">
                                <img src="{{ asset('assets/frontend/images/about/1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <p class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                We offer military grade
                                hand guns, Assault rifles,
                                Sniper rifles, Guided anti
                                tank missile & Mortar.
                            </p>
                        </div>
                    </div>

                    <div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="about-content">
                                <img src="{{ asset('assets/frontend/images/about/1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <p class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                We serve top quality live
                                ammunition. The list
                                consist of .22LR, 9 mm,
                                .45 Acp, 7.62x39/51 mm,
                                Mortar shell.
                            </p>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="about-content">
                                <img src="{{ asset('assets/frontend/images/about/1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <p class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                We provide support for
                                spare parts of AW
                                119/139, Bell 206/212,
                                MI17 Helicopter & C130
                                J/B Hercules aircraft.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div section-scroll='7' class="wd_scroll_wrap">
        <section class="blog-area section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading2">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Programs & Projects</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-slider">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                <figure><img src="{{ asset('assets/frontend/images/blog/1.jpg')}}" alt=""></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2020</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                <figure><img src="{{ asset('assets/frontend/images/blog/2.jpg')}}" alt=""></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2020</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog wow  fadeInUp animated" data-wow-duration="1.8s" style="visibility: visible; animation-duration: 1.8s; animation-name: fadeInUp;">
                                <figure><img src="{{ asset('assets/frontend/images/blog/3.jpg')}}" alt=""></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2020</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog">
                                <figure><img src="{{ asset('assets/frontend/images/blog/1.jpg')}}" alt=""></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2020</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog">
                                <figure><img src="{{ asset('assets/frontend/images/blog/2.jpg')}}" alt=""></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2020</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="blog">
                                <figure><img src="{{ asset('assets/frontend/images/blog/3.jpg')}}" alt=""></figure>
                                <div class="content">
                                    <span><i class="fa  fa-calendar-o"></i>January 29, 2020</span>
                                    <h4><a href="#">Report about the team's trip to the road show</a></h4>
                                    <p>Nam nec tellus a odio tincidunt auctor are odio sed non mauris. This is Photoshop's ern of Lorem Ipsum Proin gravida.</p>
                                    <a href="#" class="blog-btn">read more <i class="fa  fa-arrow-circle-o-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="view-btn">
                        <a href="#">All News</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="media-area section bg-img jarallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Press (Media)</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-2 col-md-offset-2">
                        <div class="mediabrand">
                            <ul>
                                <li class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/media/1.png') }}" alt=""></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="1.6s" style="visibility: visible; animation-duration: 1.6s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/media/2.png') }}" alt=""></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="1.9s" style="visibility: visible; animation-duration: 1.9s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/media/3.png') }}" alt=""></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="2.1s" style="visibility: visible; animation-duration: 2.1s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/media/4.png') }}" alt=""></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="2.4s" style="visibility: visible; animation-duration: 2.4s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/media/5.png') }}" alt=""></a>
                                </li>
                                <li class="wow  fadeInUp animated" data-wow-duration="2.7s" style="visibility: visible; animation-duration: 2.7s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/media/6.png') }}" alt=""></a>
                                </li>
								<li class="wow  fadeInUp animated" data-wow-duration="2.7s" style="visibility: visible; animation-duration: 2.7s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/media/7.png') }}" alt=""></a>
                                </li>
								<li class="wow  fadeInUp animated" data-wow-duration="2.7s" style="visibility: visible; animation-duration: 2.7s; animation-name: fadeInUp;">
                                    <a href="#"><img src="{{ asset('assets/frontend/images/media/8.png') }}" alt=""></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Footer area start here-->

        @include('home.partials.footer')

    </div>

    @include('home.partials.script')

</body>

</html>
