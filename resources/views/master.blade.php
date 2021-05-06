
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

    <!--Our Mission & Vission area start here-->
    @include('home.pages.mission_vission')

    <!--Who we are area start here-->
    <div section-scroll='1' class="wd_scroll_wrap">
        <section class="about-area pd-t70 pd-b100 jarallax bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <h2 class="f-40 fw-400 wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Who we are?</h2>
                            <p class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp; color:white">
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

                <h6 class="f-40 fw-400 wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; color:#9f9f9f; text-align: center;">
                    The best the market can offer
                </h6>
                <h2 style="color:#ed7d31; text-align: center;">We Serve</h2>
                <div class="row">
                    <div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="about-content">
                                <img src="{{ asset('assets/frontend/images/about/1.png') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <p class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp; color:white">
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
                            <p class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp; color:white">
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
                            <p class="wow  fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp; color:white">
                                We provide support for
                                spare parts of AW
                                119/139, Bell 206/212,
                                MI17 Helicopter & C130
                                J/B Hercules aircraft.
                            </p>
                        </div>
                    </div>
                </div>

               <div style="text-align: center;">
                <div style="color:#ed7d31">
                    <strong >
                        “It’s an unfortunate fact that we can secure peace only by preparing for
                        war.”
                    </strong>
                </div>
                <div  style="color:#ed7d31">
                    <strong>
                       - John F. Kennedy
                    </strong>
                </div>
               </div>

            </div>
        </section>
    </div>

    <div section-scroll='7' class="wd_scroll_wrap">

       @include('home.pages.project_program')

       <section class="media-area section bg-img jarallax" style="background: white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading">
                        <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; color:black">
                            Our Worldwide Valued Principles
                        </h2>
                    </div>
                </div>


                <div>
                    <p>
                        <b style="color: #ed7d31">P.R. International</b> currently associated with principles from USA, Turkey and UAE. Our valued principles are
                        participating tender and direct purchase opportunities of DGDP in a regular basis and they have very high
                        contract wining record. We believe this is only possible through our close communication, in depth market
                        analysis and competitive pricing.
                    </p>

                    <div style="text-align: center">
                        <img src="{{ asset('assets/frontend/images/world_wide_value.png') }}" alt="">
                    </div>
                    <br>

                    <div>
                        <div style="text-align: center; color:black">
                             <strong> “We make war that we may live in peace” </strong>
                        </div>
                        <div style="text-align: center; color:black">
                             <strong> - Aristotle </strong>
                        </div>
                     </div>
                </div>
                <br>
                <br>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div>
                        <h4 style="color: chocolate"> The Secret of Our
                            Success! </h4>
                            <p style="color: black">
                                Our principle companies
                                have a qualified technical
                                team who deals installation
                                works, after commissioning
                                services and maintenance
                                during warranty and
                                post-warranty period of the
                                contracts. The technical
                                team consist of well trained
                                and experienced people.
                            </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div>
                        <img style="height: 450px" src="{{ asset('assets/frontend/images/success_img.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="row">
                       <img src="{{ asset('assets/frontend/images/success_icon_1.png') }}" alt="">
                        <p style="color: black">
                            Quality is pride of workmanship.
                        </p>
                    </div>
                    <div class="row">
                        <img src="{{ asset('assets/frontend/images/success_icon_2.png') }}" alt="">
                         <p style="color: black">
                            The service should not be
                            the best, it should be
                            legendary.
                         </p>
                     </div>
                     <div class="row">
                        <img src="{{ asset('assets/frontend/images/success_icon_3.png') }}" alt="">
                         <p style="color: black">
                            We made our passion our
                            profession.
                         </p>
                     </div>
                </div>
            </div>
        </div>
    </section>

        <section class="media-area section bg-img jarallax">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading">
                            <h2 class="wow  fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                                CORE TEAM
                            </h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/core_team_1.png')}}" alt="">
                            </figure>
                            <div class="content">
                                <strong> Mr. Hasan Mahmud </strong>
                                <h4>Proprietor</h4>
                                <h6>P.R. International</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/core_team_2.png')}}" alt="">
                            </figure>
                            <div class="content">
                                <strong> Saeed Ur Rashid </strong>
                                <h4>CEO</h4>
                                <h6>P.R. International</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/core_team_3.png')}}" alt="">
                            </figure>
                            <div class="content">
                                <strong> Abdullah Al Hasib </strong>
                                <h4>Manager</h4>
                                <h6>P.R. International</h6>
                            </div>
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
