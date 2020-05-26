@extends('layout')
@section('title','Art clash | Accueil')
@section('content')
        <!-- Welcome Area Start -->
    <section class="welcome-area">
        <div class="welcome-slides owl-carousel">
            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url({{ asset('/assets/img/bg-img/festiv.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text text-right">
                                <h2 data-animation="fadeInUp" data-delay="300ms">Art <br>Clash</h2>
                                <h6 data-animation="fadeInUp" data-delay="500ms">« L’Art dans tous ses états !»</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Slide -->
            <div class="single-welcome-slide bg-img bg-overlay jarallax" style="background-image: url({{ asset('/assets/img/bg-img/festiv3.jpg') }});">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <!-- Welcome Text -->
                        <div class="col-12">
                            <div class="welcome-text-two text-center">
                                <h5 data-animation="fadeInUp" data-delay="100ms">La promotion de l'Art et de la culture africaine</h5>
                                <h2 data-animation="fadeInUp" data-delay="300ms">Art Clash</h2>
                                <!-- Event Meta -->
                                <div class="hero-btn-group" data-animation="fadeInUp" data-delay="700ms">
                                    <a href="{{ route('discipline')}}" class="btn confer-btn m-2">Nos disciplines <i class="zmdi zmdi-long-arrow-right"></i></a>
                                    <a href="#" class="btn confer-btn m-2">Billeterie <i class="zmdi zmdi-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Icon -->
        <div class="icon-scroll" id="scrollDown"></div>
    </section>
    <!-- Welcome Area End -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="about">

        <!-- Counter Up Area -->
        <div class="countdown-up-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-3">
                        <!-- Countdown Text -->
                        <div class="countdown-content-text mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <h6>date de l'évènement</h6>
                            <h4>DECOMPTE JUSQU'À L'ÉVÉNEMENT</h4>
                        </div>
                    </div>

                    <div class="col-12 col-md-9">
                        <div class="countdown-timer mb-100 wow fadeInUp" data-wow-delay="300ms">
                            <div id="clock"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">A propos d' Art Clash</h6>
                        <h3 class="wow fadeInUp" data-wow-delay="300ms">« L’Art dans tous ses états !»</h3>
                        <p class="wow fadeInUp" data-wow-delay="300ms">« ART’CLASH » est un évent, une lucarne visant à promouvoir l’art et la culture africaine dans son ensemble à travers la découverte de talents et la valorisation de ses acteurs : c’est un évènement de remise de distinctions. <br>
                        En effet, « ART’CLASH » est une plateforme d’expression artistique où acteurs des arts se défieront, par
                        catégorie (discipline artistique) autour d’un thème central en rapport avec l’actualité. C’est donc une
                        compétition à l’issue de laquelle les meilleures œuvres seront primées.
                        </p>
                        <a href="{{ route('presentation')}}" class="btn confer-btn mt-50 wow fadeInUp" data-wow-delay="300ms">savoir plus <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('/assets/img/bg-img/festiv2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

        
    </section>
    <!-- About Us And Countdown Area End -->

    <!-- Our Speakings Area Start -->
    <section class="our-speaker-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url({{ asset('/assets/img/bg-img/3.jpg') }});">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Nos invités</p>
                        <h4>seront présents à cet évènement </h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Sande Franck oscar</h5>
                            <<p>CO of GAYATECH CI</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Sande Franck oscar</h5>
                            <p>CO of GAYATECH CI</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Sande Franck oscar</h5>
                            <p>CO of GAYATECH CI</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Sande Franck oscar</h5>
                            <p>CO of GAYATECH CI</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Sande Franck oscar</h5>
                            <p>CO of GAYATECH CI</p>
                        </div>
                    </div>
                </div>

                <!-- Single Speaker Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-speaker-area bg-gradient-overlay-2 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Thumb -->
                        <div class="speaker-single-thumb">
                            <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                        </div>
                        <!-- Social Info -->
                        <div class="social-info">
                            <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <a href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a href="#"><i class="zmdi zmdi-linkedin"></i></a>
                        </div>
                        <!-- Info -->
                        <div class="speaker-info">
                            <h5>Sande Franck oscar</h5>
                            <p>CO of GAYATECH CI</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Speakings Area End -->

    <!-- Our Sponsor And Client Area Start -->
    <section class="our-sponsor-client-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Partenaires &amp; Sponsors</p>
                        <h4>SPONSORS OFFICIEL</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <!-- Our Sponsor area -->
                    <div class="our-sponsor-area d-flex flex-wrap">
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('/assets/img/core-img/p-1.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('/assets/img/core-img/p-2.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('/assets/img/core-img/p-3.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('/assets/img/core-img/p-4.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('/assets/img/core-img/p-5.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('/assets/img/core-img/p-6.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('/assets/img/core-img/p-7.png') }}" alt=""></a>
                        </div>
                        <!-- Single Sponsor -->
                        <div class="single-sponsor wow fadeInUp" data-wow-delay="300ms">
                            <a href="#"><img src="{{ asset('/assets/img/core-img/p-8.png') }}" alt=""></a>
                        </div>
                    </div>
                </div>

                <!-- Our client area -->
                <div class="col-12">
                    <div class="our-client-area mt-100 wow fadeInUp" data-wow-delay="300ms">

                        <!-- Heading -->
                        <div class="col-12">
                            <div class="section-heading-2 text-center wow fadeInUp" data-wow-delay="300ms">
                                <p>TÉMOIGNAGES</p>
                                <h4>ILS NOUS ONT FAIT CONFIANCE</h4>
                            </div>
                        </div>
                        <!-- client Slider -->
                        <div class="client-area owl-carousel">
                            <!-- Single client Slider -->
                            <div class="single-client-content">
                                <!-- Single client Text -->
                                <div class="single-client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                    <!-- Single client Thumb and info -->
                                    <div class="single-client-thumb-info d-flex align-items-center">
                                        <!-- Single client Thumb -->
                                        <div class="single-client-thumb">
                                            <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                        </div>
                                        <!-- Single client Info -->
                                        <div class="client-info">
                                            <h6>Sande Franck Oscar</h6>
                                            <p>Developper web</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single client Icon -->
                                <div class="client-icon">
                                    <i class="zmdi zmdi-quote"></i>
                                </div>
                            </div>

                            <!-- Single client Slider -->
                            <div class="single-client-content">
                                <!-- Single client Text -->
                                <div class="single-client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                    <!-- Single client Thumb and info -->
                                    <div class="single-client-thumb-info d-flex align-items-center">
                                        <!-- Single client Thumb -->
                                        <div class="single-client-thumb">
                                            <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                        </div>
                                        <!-- Single client Info -->
                                        <div class="client-info">
                                            <h6>Sande Franck Oscar</h6>
                                            <p>Developper web</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single client Icon -->
                                <div class="client-icon">
                                    <i class="zmdi zmdi-quote"></i>
                                </div>
                            </div>

                            <!-- Single client Slider -->
                            <div class="single-client-content">
                                <!-- Single client Text -->
                                <div class="single-client-text">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                    <!-- Single client Thumb and info -->
                                    <div class="single-client-thumb-info d-flex align-items-center">
                                        <!-- Single client Thumb -->
                                        <div class="single-client-thumb">
                                            <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                        </div>
                                        <!-- Single client Info -->
                                        <div class="client-info">
                                            <h6>Sande Franck Oscar</h6>
                                            <p>Developper web</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single client Icon -->
                                <div class="client-icon">
                                    <i class="zmdi zmdi-quote"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Sponsor And Client Area End -->

    <!-- Our Blog Area Start -->
    <section class="our-blog-area bg-img bg-gradient-overlay section-padding-100-60" style="background-image: url({{ asset('/assets/img/bg-img/festiv6.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Heading -->
                    <div class="section-heading text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>Notre blog</p>
                        <h4>Dernières nouvelles</h4>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('/assets/img/bg-img/festiv5.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Le groupe Cerceaux ivoir</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> Administrateur</a>
                            </div>
                            <p>Nous aurons la presence du groupe cerceaux Ivoir pour une prestation.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('/assets/img/bg-img/festiv5.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Le groupe Cerceaux ivoir</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> Administrateur</a>
                            </div>
                            <p>Nous aurons la presence du groupe cerceaux Ivoir pour une prestation.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-area wow fadeInUp" data-wow-delay="300ms">
                        <!-- Single blog Thumb -->
                        <div class="single-blog-thumb">
                            <img src="{{ asset('/assets/img/bg-img/festiv5.jpg') }}" alt="">
                        </div>
                        <div class="single-blog-text text-center">
                            <a class="blog-title" href="#">Le groupe Cerceaux ivoir</a>
                            <!-- Post Meta -->
                            <div class="post-meta">
                                <a class="post-date" href="#"><i class="zmdi zmdi-alarm-check"></i> January 14, 2019</a>
                                <a class="post-author" href="#"><i class="zmdi zmdi-account"></i> Administrateur</a>
                            </div>
                            <p>Nous aurons la presence du groupe cerceaux Ivoir pour une prestation.</p>
                        </div>
                        <div class="blog-btn">
                            <a href="#"><i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="more-speaker-btn text-center mt-20 mb-40 wow fadeInUp" data-wow-delay="300ms">
                        <a class="btn confer-btn-white" href="{{ route('blog')}}">Voir plus <i class="zmdi zmdi-long-arrow-right"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Our Blog Area End -->
@endsection
