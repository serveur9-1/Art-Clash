
@extends('layout')
@section('title','Art Clash | Présentation')
@section('content')
	
	<!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url({{ asset('/assets/img/bg-img/festiv9.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">A propos de nous</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Présentation</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- What We offer Area Start -->
    <section class="what-we-offer-area section-padding-100-70">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="section-heading-3 text-center wow fadeInUp" data-wow-delay="300ms">
                        <p>C'est quoi</p>
                        <h4> Art Clash ?</h4>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single We Offer Area -->
                    <div class="col-12 col-md-6 col-xl-3">
                        <a href="#contexte">
                        <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                            <!-- Icon -->
                            <div class="offer-icon">
                                <img src="{{ asset('/assets/img/core-img/icon-3.png') }}" alt="">
                            </div>
                            <h5>Contexte et justification</h5>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque</p>
                        </div>
                         </a>
                    </div>

                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <a href="#presentation">
                        <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                            <!-- Icon -->
                            <div class="offer-icon">
                                <img src="{{ asset('/assets/img/core-img/icon.png') }}" alt="">
                            </div>
                            <h5>Présentation</h5>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum</p>
                        </div>
                    </a>
                </div>

                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <a href="#objectif">
                        <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                            <!-- Icon -->
                            <div class="offer-icon">
                                <img src="{{ asset('/assets/img/core-img/icon-2.png') }}" alt="">
                            </div>
                            <h5>Objectifs</h5>
                            <p>On the other hand, we denounce with righteous indignation</p>
                        </div>
                    </a>
                </div>

                <!-- Single We Offer Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <a href="#after">
                        <div class="single-we-offer-content text-center wow fadeInUp" data-wow-delay="0.3s">
                            <!-- Icon -->
                            
                            <div class="offer-icon">
                                <img src="{{ asset('/assets/img/core-img/icon-4.png') }}" alt="">
                            </div>
                            <h5>L’after Art Clash</h5>
                            <p>These cases are perfectly simple and easy to distinguish in a free hour</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- What We offer Area End -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="contexte">
        <div class="container" id="">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">Contexte et justification</h6>
                        <p class="wow fadeInUp" data-wow-delay="300ms">L’Afrique est un continent riche de par sa diversité de cultures. Cette diversité impacte favorablement ses différentes formes d’expressions artistiques, qu’elles soient traditionnelles ou urbaines. <br>
                        L’art, c’est s’exprimer, c’est manifester ! On ne le dira jamais assez l’art est un excellent moyen non seulement pour divertir, mais il permet aussi de dénoncer, sensibiliser, interpeller, instruire, éduquer, impacter. 
                        Face aux nombreux défis des pays Africains en général, les artistes ont beaucoup à apporter en termes de contributions notamment dans l’éveil des la jeunesse. <br>
                        C’est dans ce contexte que « ART’CLASH » est initié à l’attention des artistes afin que ceux-ci puissent s’adresser à leur jeunesse sur des sujets d’actualités dans l’optique d’une transformation des mentalités allant dans le sens du développement et le bien-être pour tous.</p>
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('/assets/img/bg-img/contexte.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us And Countdown Area End -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="presentation">
        <div class="container" id="">
            <div class="row align-items-center">
                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('/assets/img/bg-img/presentation.png') }}" alt="">
                        <img src="{{ asset('/assets/img/bg-img/presentation.png') }}" alt="">
                        <img src="{{ asset('/assets/img/bg-img/presentation.png') }}" alt="">
                    </div>
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('/assets/img/bg-img/adc.png') }}" alt="">
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">PRÉSENTATION</h6>
                        <p class="wow fadeInUp" data-wow-delay="300ms">« ART’CLASH » est un évent,une lucarne visant à promouvoir l’art et la culture africaine dans son ensemble à travers la découverte de talents et la valorisation de ses acteurs : c’est un évènement de remise de distinctions. En effet, « ART’CLASH » est une plateforme d’expression artistique où acteurs des arts se défieront, par catégorie (discipline artistique) autour d’un thème central en rapport avec l’actualité. C’est donc une compétition à l’issue de laquelle les meilleures œuvres seront primées. « ART’CLASH » est une initiative de :

                            <ul class="" style="color: white;">
                                
                                <li> * <b>AFRICA DREAM CONCEPT</b> structure de communication, évènementiel et production audiovisuelle.</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us And Countdown Area End -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="objectif">
        <div class="container" id="">
            <div class="row align-items-center">
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">Objectifs</h6>
                        <p class="wow fadeInUp" data-wow-delay="300ms">
                            <ul class="" style="color: white;">
                                <li> - Créer un cadre institutionnel d’émulation saine entre les artistes africains.</li> <br>
                                <li> - Valoriser l’art et les artistes africains.</li><br>
                                <li> - Stimuler la créativité des artistes allant dans le sens de l’éveil des consciences.</li> <br>
                                <li> - Découvrir et promouvoir des jeunes talents.</li><br>
                                <li> - Primer et honorer les acteurs des arts et la culture en Afrique.</li> <br>
                                <li> - Donner des opportunités aux artistes en quête de soutien et/ou de reconnaissance.</li>
                            </ul>
                        </p>
                    </div>
                </div>

                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('/assets/img/bg-img/objectif1.png') }}" alt="">
                    </div>
                    <div class="about-thumb mb-80 wow fadeInUp" data-wow-delay="300ms">
                        <img src="{{ asset('/assets/img/bg-img/objectif5.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us And Countdown Area End -->

    <!-- About Us And Countdown Area Start -->
    <section class="about-us-countdown-area section-padding-100-0" id="after">
        <div class="container" id="">
            <div class="row align-items-center">
                <!-- About Thumb -->
                <div class="col-12 col-md-6">
                    <div class="about-thumb mb-80 wow fadeInUp p-0" data-wow-delay="300ms">
                        <img style="width: 500px;" src="{{ asset('/assets/img/bg-img/festiv2.jpg') }}" alt="">
                    </div>
                </div>
                <!-- About Content -->
                <div class="col-12 col-md-6">
                    <div class="about-content-text mb-80">
                        <h6 class="wow fadeInUp" data-wow-delay="300ms">L’AFTER ART CLASH</h6>
                        <p class="wow fadeInUp" data-wow-delay="300ms">
                            Dans une période de deux (02) mois après la désignation des vainqueurs de Art Clash, une tournée de spectacles aura lieu dans plusieurs villes du pays hôte de Art Clash. Les objectifs seront de : <br>
                            - Présenter les vainqueurs aux populations sur la base de la qualité de leurs productions ; <br>
                            - Promouvoir leurs talents en leur offrant une scène pour exprimer leur art et leurs potentiels ; <br>
                            - Animer artistiquement et culturellement ces villes et communes ; <br>
                            - Promouvoir le phénomène Art’Clash.</p>
                            <span style="color: #df42b1;">Aux différents rendez-vous de l’After Art’Clash, des espaces de consommation des produits du sponsor (Brassivoir) seront créés autours du podium : ça sera l’occasion pour le sponsor de promouvoir ses produits et faire du chiffre sur place.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us And Countdown Area End -->

@endsection
