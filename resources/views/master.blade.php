
<!DOCTYPE html>
<html lang="en">

<head>

    @include('home.partials.stylesheet')

</head>

<body>

  <!-- ======= Header ======= -->
  @include('home.partials.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade" data-bs-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="color:#ef682b">Welcome to <span>P.R. International</span></h2>
          <p class="animate__animated fanimate__adeInUp">

                 <b style="color: #ed7d31" >P.R. International</b> is a Bangladesh based defence product supplier company registered and exclusively approved by Directorate General of Defence Purchase (DGDP) under the Ministry of Defence (MoD).
                We are working with DGDP from 2003 and successfully deliver our services. We serve all kinds of arms, ammunition & aeroplane spare parts for Bangladesh Defence.

        </p>
          {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="color:#ef682b">Our Mission</h2>
          <p class="animate__animated animate__fadeInUp">

            To serve by providing the best system and technologies that will assure security and freedom of our country and her allies.
         </p>
          {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown" style="color:#ef682b">Our Vission</h2>
          <p class="animate__animated animate__fadeInUp">
            A business world full of connection, meaning and prosperity for all.
            </p>
          {{-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> --}}
        </div>
      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>About</h2>
          <p>Who we are</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
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
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
                <img class="image__shadow" style="width: 655px; height:390px" src="{{ asset('assets/frontend/picture/27.png') }}" alt="">
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="defense" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Services</h2>
          <p>The best the market can offer</p>
          <h3>We Serve</h3>
        </div>

        <div class="row">

          <div class="col-lg-7 col-md-8 pt-lg-0">
            <img style="width: 750px; height:390px" src="{{ asset('assets/frontend/picture/1.jpg') }}" alt="">
          </div>
            <div class="col-lg-5 col-md-4 ">
                <p>
                    We offer military grade
                    hand guns, Assault rifles,
                    Sniper rifles, Guided anti
                    tank missile & Mortar.
                </p>
            </div>
        </div>

        <hr class="mt-5">


         <div class="row content  mt-5" data-aos="fade-up">
          <div class="col-lg-5">
            <p>
                    We serve top quality live
                    ammunition. The list
                    consist of .22LR, 9 mm,
                    .45 Acp, 7.62x39/51 mm,
                    Mortar shell.
            </p>
          </div>
          <div class="col-lg-7 pt-4 pt-lg-0">
            <p>
                 <img style="width: 750px; height:390px" src="{{ asset('assets/frontend/picture/2.jpg') }}" alt="">
            </p>
          </div>
        </div>

<hr class="mt-5">
        <div class="row mt-5">

            <div class="col-lg-7 col-md-7 mt-4">
                <img style="width: 750px; height:390px" src="{{ asset('assets/frontend/picture/24.png') }}" alt="">
            </div>

            <div class="col-lg-5 col-md-4 mt-4">
                <p>
                    We provide support for
                        spare parts of AW
                        119/139, Bell 206/212,
                        MI17 Helicopter & C130
                        J/B Hercules aircraft.
                </p>
            </div>
        </div>


      </div>

    </section><!-- End Services Section -->

    <!-- ======= project_program Section ======= -->
    <section id="project_program" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2> Programs & Projects</h2>
          <p>Programs & Projects</p>
        </div>
        <p>
            <b style="color: #ed7d31">P.R. International</b> successfully accomplished several contracts of DGDP with high praise and complete product
            satisfaction. We always maintain good communication with our system providers and our clients which ensures our
            service accuracy to hit the mark. Our continuous monitoring, factory visit, testing and face to face communication bring
            us to near perfection.
          </p>

        <div class="row portfolio-container" data-aos="fade-up">

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img">
                <img style="width: 360px; height:450px"  src="{{ asset('assets/frontend/project/1.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="portfolio-info">
              {{-- <h4>Card 2</h4> --}}
              <p style="width:280px">Repair/Overhaul of 03 Line Items (Vendor and Engine Parts) of Bell-206 Helicopter</p>
              <a href="{{ asset('assets/frontend/project/1.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Repair/Overhaul of 03 Line Items (Vendor and Engine Parts) of Bell-206 Helicopter">
                <i class="bx bx-plus ml-4"></i>
            </a>
              {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img">
                <img style="width: 360px; height:450px" src="{{ asset('assets/frontend/project/2.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="portfolio-info">
              <p style="width:280px">Repair/Overhaul of 03 Line Items of C-130B Aircraft</p>
              <a href="{{ asset('assets/frontend/project/2.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Repair/Overhaul of 03 Line Items of C-130B Aircraft"><i class="bx bx-plus"></i></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-img">
                <img style="width: 360px; height:450px" src="{{ asset('assets/frontend/project/3.jpg')}}" class="img-fluid" alt="">
            </div>
            <div class="portfolio-info">
              <p style="width:270px">Small Arms 9*19 MM BALL Parabellum for 9 MM Pistol T-92</p>
              <a href="{{ asset('assets/frontend/project/3.jpg')}}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Small Arms 9*19 MM BALL Parabellum for 9 MM Pistol T-92"><i class="bx bx-plus"></i></a>
            </div>
          </div>

        </div>

         <div class="inline-block">

             <div style="color:#ed7d31;" class="all__font__change mt-4 text-center">
                <marquee behavior="scroll" direction="left">
                    “All’s fair in love and war” - F.E. Smedley
                    <span style="margin-left:1in;"></span>
                     “It’s an unfortunate fact that we can secure peace only by preparing for war.”  - John F. Kennedy
                      <!--<span style="margin-left:1in;"></span> -->.....
                      “We make war that we may live in peace” - Aristotle
                </marquee>
            </div>
         </div>


      </div>
    </section><!-- End Portfolio Section -->

    <section>
        <div class="container">

          <div class="row" data-aos="zoom-out">
            <div class="col-lg-12 text-center text-lg-start">
              <h3> Our Worldwide Valued Principles</h3>
              <p class="all__font__change">
                  <b style="color: #ed7d31" >P.R. International</b> currently associated with principles from USA, Turkey and UAE. Our valued principles are
                  participating tender and direct purchase opportunities of DGDP in a regular basis and they have very high
                  contract wining record. We believe this is only possible through our close communication, in depth market
                  analysis and competitive pricing.
              </p>
            </div>
               <div style="text-align: center">
                  <img src="{{ asset('assets/frontend/images/world_wide_value.png') }}" alt="">
              </div>
          </div>

          <div class="row mt-4">
              <div class="col-lg-4 col-md-4">
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
              <div class="col-lg-4 col-md-4">
                  <img style="height: 450px" src="{{ asset('assets/frontend/images/success_img.png') }}" alt="">

              </div>
              <div class="col-lg-4 col-md-4">
                  <div class="row">
                      <img style="width:120px;height:100px" src="{{ asset('assets/frontend/images/success_icon_1.png') }}" alt="">
                          <p style="color: black" class="all__font__change">
                              Quality is pride of workmanship.
                          </p>
                      </div>
                      <div class="row">
                          <img style="width:120px;height:100px" src="{{ asset('assets/frontend/images/success_icon_2.png') }}" alt="">
                          <p style="color: black" class="all__font__change">
                              The service should not be
                              the best, it should be
                              legendary.
                          </p>
                      </div>
                      <div class="row">
                          <img style="width:120px;height:100px" src="{{ asset('assets/frontend/images/success_icon_3.png') }}" alt="">
                          <p style="color: black" class="all__font__change">
                              We made our passion our
                              profession.
                          </p>
                      </div>
              </div>
          </div>
        </div>
      </section>

    <!-- ======= Achievements Section ======= -->
    <section id="what_we_do" class="faq">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Achievements</h2>
          <p>What We Do ?</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">
                1. Cartridge for 9MM Pistol
                 <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                We supplied various amount of cartridge small arms 9*19 MM ball parabellum for 9 MM
                pistol.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">
                2. Repair and overhaul for Bell 206 Helicopter
                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                We repair and overhaul various parts of Bell 206 Helicopter including Freewheeling
                assembly, Main driveshaft assembly, Main rotor Assembly, Starter generator assembly,
                Swashplate assembly, Tail rotor assembly etc. for our clients
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">
                3. Repair and overhaul for Bell 212 Helicopter
                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                We repair and overhaul various parts of Bell 212 Helicopter including Intermediate
                Gearbox assembly, Main driveshaft assembly, Main rotor Assembly, Oil cooler blower
                assembly, Transmission assembly, Tail rotor assembly etc. for our clients
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">
                4. Repair and overhaul for C-130B Aircraft
                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                We repair and overhaul various parts of C-130B aircraft including Structural and
                composite assembly, Fastening assembly, Hardware Assembly etc. for our clients
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">
                5. Repair and overhaul for AW-119 Helicopter
                <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                We repair and overhaul various parts of AgustaWestland 119 Helicopter including
                Structural and Heavy maintenance, Avionics assembly, Main rotor Assembly etc. for our
                clients
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">
                6. Repair and overhaul for AW-139 Helicopter
                 <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                We repair and overhaul various parts of AgustaWestland 139 Helicopter including
                Structural and Heavy maintenance, Avionics assembly, Main rotor Assembly etc. for our
                clients
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section><!-- End F.A.Q Section -->

    @include('home.pages.team_message')

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-12" data-aos="fade-right">
            <div class="info">
              <div class="row">
                  <div class="col-lg-4">
                    <div class="address">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Location:</h4>
                        <p> <b>Cor. Office :</b> 499 Mohakhali DOHS, Mohakhali, Dhaka-1206 </p> <br>
                        <p>
                            <b>Head Office :</b> 62/3 Kallyanpur Main road, Mirpur Dhaka-1207
                        </p>
                    </div>
                  </div>

                <div class="col-lg-3">
                    <div class="address">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>hasib@printernational.com.bd</p>
                      </div>
                </div>

                <div class="col-lg-5">
                <div class="address">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p> <b>Contact :</b> +880 1799881966, +880 01789069539</p>
                    </div>
                </div>
             </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3 class="text-uppercase">P.R. International</h3>
      {{-- <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p> --}}
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>P.R.International</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/selecao-bootstrap-template/ -->
        Designed by <a href="https://printernational.com.bd">P.R.International</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  @include('home.partials.script')

</body>

</html>
