
<!doctype html>
<html class="no-js" lang="en">

<head>

    @include('home.partials.stylesheet')

    <style>
        .all__font__change{
            font-family:'Fira Code', monospace;
            font-weight: 500;
        }

        .image__shadow {
            -moz-box-shadow:    inset 0 0 10px #000000;
            -webkit-box-shadow: inset 0 0 10px #000000;
            box-shadow:         inset 0 0 10px #000000;
        }

    </style>


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

                                                <h2 data-animation="animated bounceInLeft" class="all__font__change" style="color: #e67930; text-align:center">
                                                    P.R. International
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 hidden-xs hidden-sm">
                                            <div class="btc_timer_section_wrapper">
                                                <div id="clockdiv" style="display: none">
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
                               <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h2 class="all__font__change">Our Mission</h2>
                                        <p class="all__font__change text-justify">
                                            To serve by providing the
                                            best system and
                                            technologies that will
                                            assure security and
                                            freedom of our country
                                            and her allies.
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <h2 class="all__font__change">Our Vision</h2>
                                        <p class="all__font__change text-justify">
                                            A business world full of
                                            connection, meaning and
                                            prosperity for all.
                                        </p>
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
                                               <!-- <li data-animation="animated bounceInDown" class="slider_social_icon1"><a href="#"><i class="fa fa-facebook"></i></a></li> -->
                                                <!-- <li data-animation="animated bounceInDown" class="slider_social_icon2"><a href="mailto:hasib@printernational.net"><i class="fa fa-envelope"></i></a></li> -->
                                            </ul>
                                            <h2 data-animation="animated bounceInLeft">P.R. International</h2>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12  hidden-xs hidden-sm">
                                        <div class="btc_timer_section_wrapper">
                                            <div id="clockdiv2" style="display: none">
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
    {{-- @include('home.pages.mission_vission') --}}

    <!--Who we are area start here-->
    <div section-scroll='1' class="wd_scroll_wrap">
        <section class="about-area pd-t70 pd-b100 jarallax bg-img">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <h2 class="f-40 fw-400 wow all__font__change fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">Who we are?</h2>
                            <p class="wow all__font__change fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp; color:white">
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
                            {{-- <div class="buttons">
                                <a href="#" class="btn1">WHITEPAPER</a>
                                <a href="#" class="btn3">Buy Tokens Now!</a>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="about-img wow image__shadow fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp;">
                            <img class="image__shadow" style="width: 655px; height:390px" src="{{ asset('assets/frontend/picture/Big_Picture_C130J_BAF.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <br>
                <br><br><br><br>


                <div section-scroll='defense' class="wd_scroll_wrap">
                                    <h6 class="f-40 fw-400 wow all__font__change fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; color:#9f9f9f; text-align: center;">
                    The best the market can offer
                </h6>
                <h2 class="all__font__change" style="color:#ed7d31; text-align: center;">We Serve</h2>
                <div class="row">
                    <div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="about-content">
                                <img style="width: 262px; height:156px" src="{{ asset('assets/frontend/picture/Sniper.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <p class="wow all__font__change fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp; color:white">
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
                                <img style="width: 262px; height:156px" src="{{ asset('assets/frontend/picture/7.62_ammo.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <p class="wow all__font__change fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp; color:white">
                                We serve top quality live
                                ammunition. The list
                                consist of .22LR, 9 mm,
                                .45 Acp, 7.62x39/51 mm,
                                Mortar shell.
                            </p>
                        </div>
                    </div>

                </div>


                <br>
                <div class="row">
                    <div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="about-content">
                                <img style="width: 262px; height:156px" src="{{ asset('assets/frontend/picture/Helicopter_MI17_BAF.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <p class="wow all__font__change fadeInUp animated" data-wow-duration="1.3s" style="visibility: visible; animation-duration: 1.3s; animation-name: fadeInUp; color:white">
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
            </div>

        </section>
        <br>
        <div style="text-align: center;">
            <div style="color:#ed7d31;" class="all__font__change">

                <strong >
                    “It’s an unfortunate fact that we can secure peace only by preparing for
                    war.”
                </strong>
            </div>
            <div  style="color:#ed7d31" class="all__font__change">
                <strong>
                   - John F. Kennedy
                </strong>
            </div>
           </div>
    </div>

    <div section-scroll='7' class="wd_scroll_wrap">

       @include('home.pages.project_program')

        <section class="media-area section bg-img jarallax" style="background: white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading">
                            <h2 class="wow all__font__change fadeInUp animated" data-wow-duration="1.0s" style="visibility: visible; animation-duration: 1.0s; animation-name: fadeInUp; color:#ed7d31">
                                Our Worldwide Valued Principles
                            </h2>
                        </div>
                    </div>


                    <div>
                        <p class="all__font__change">
                            <b style="color: #ed7d31" >P.R. International</b> currently associated with principles from USA, Turkey and UAE. Our valued principles are
                            participating tender and direct purchase opportunities of DGDP in a regular basis and they have very high
                            contract wining record. We believe this is only possible through our close communication, in depth market
                            analysis and competitive pricing.
                        </p>

                        <div style="text-align: center">
                            <img src="{{ asset('assets/frontend/images/world_wide_value.png') }}" alt="">
                        </div>
                        <br>

                        <div>
                            <div style="text-align: center; color:black" class="all__font__change">
                                <strong> “We make war that we may live in peace” </strong>
                            </div>
                            <div style="text-align: center; color:black" class="all__font__change">
                                <strong> - Aristotle </strong>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <div>
                            <h4 style="color: chocolate" class="all__font__change"> The Secret of Our
                                Success! </h4>
                                <p style="color: black" class="all__font__change">
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
                            <p style="color: black" class="all__font__change">
                                Quality is pride of workmanship.
                            </p>
                        </div>
                        <div class="row">
                            <img src="{{ asset('assets/frontend/images/success_icon_2.png') }}" alt="">
                            <p style="color: black" class="all__font__change">
                                The service should not be
                                the best, it should be
                                legendary.
                            </p>
                        </div>
                        <div class="row">
                            <img src="{{ asset('assets/frontend/images/success_icon_3.png') }}" alt="">
                            <p style="color: black" class="all__font__change">
                                We made our passion our
                                profession.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('home.pages.achivement')

        @include('home.pages.team_message')


        @include('home.partials.footer')

    </div>

    @include('home.partials.script')

</body>

</html>
