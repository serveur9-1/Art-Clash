
@extends('layout')
@section('title','Art Clash | Programme')
@section('content')
	
	<!-- Breadcrumb Area Start -->
    <section class="breadcrumb-area bg-img bg-gradient-overlay jarallax" style="background-image: url({{ asset('/assets/img/bg-img/festiv9.jpg') }});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcrumb-content">
                        <h2 class="page-title">programme</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home')}}">Accueil</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Programme</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Area End -->

    <!-- Our Schedule Area Start -->
    <section class="our-schedule-area bg-white section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="schedule-tab">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs wow fadeInUp" data-wow-delay="300ms" id="conferScheduleTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="monday-tab" data-toggle="tab" href="#step-one" role="tab" aria-controls="step-one" aria-expanded="true">Jour 1 <br> <span>10 janvier 2021</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="tuesday-tab" data-toggle="tab" href="#step-two" role="tab" aria-controls="step-two" aria-expanded="true">Jour2 <br> <span>11 janvier 2020</span></a>
                            </li>
                            <!-- Nav Item -->
                            <li class="nav-item">
                                <a class="nav-link" id="wednesday-tab" data-toggle="tab" href="#step-three" role="tab" aria-controls="step-three" aria-expanded="true">Jour 3 <br> <span>12 janvier 2020</span></a>
                            </li>
                        </ul>
                    </div>

                    <!-- Tab Content -->
                    <div class="tab-content" id="conferScheduleTabContent">
                        <div class="tab-pane fade show active" id="step-one" role="tabpanel" aria-labelledby="monday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Arrivée des particpants</h6>
                                                    <p>suivi <span>de l'installation des invités</span></p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 10h - 11h</p>
                                                <p><i class="zmdi zmdi-map"></i> Palais des sports de treichville</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Crop Insurance Conference</h6>
                                                    <p>by <span>Amanda Hudson</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Capdm Executive Conference</h6>
                                                    <p>by <span>Martha Burke</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Street Food Convention</h6>
                                                    <p>by <span>Jeffrey Morales</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>
                                    </div>

                                    <!-- More Schedule Btn -->
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-two" role="tabpanel" aria-labelledby="tuesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Crop Insurance Conference</h6>
                                                    <p>by <span>Amanda Hudson</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Capdm Executive Conference</h6>
                                                    <p>by <span>Martha Burke</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Street Food Convention</h6>
                                                    <p>by <span>Jeffrey Morales</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>
                                    </div>

                                    <!-- More Schedule Btn -->
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="step-three" role="tabpanel" aria-labelledby="wednesday-tab">
                            <!-- Single Tab Content -->
                            <div class="single-tab-content">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Dealing with Difficult People</h6>
                                                    <p>by <span>Gary Armstrong</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>

                                        <!-- Single Schedule Area -->
                                        <div class="single-schedule-area single-page d-flex flex-wrap justify-content-between align-items-center wow fadeInUp" data-wow-delay="300ms">
                                            <!-- Single Schedule Thumb and Info -->
                                            <div class="single-schedule-tumb-info d-flex align-items-center">
                                                <!-- Single Schedule Thumb -->
                                                <div class="single-schedule-tumb">
                                                    <img src="{{ asset('/assets/img/bg-img/sande.png') }}" alt="">
                                                </div>
                                                <!-- Single Schedule Info -->
                                                <div class="single-schedule-info">
                                                    <h6>Street Food Convention</h6>
                                                    <p>by <span>Jeffrey Morales</span> / Ceo of Confer</p>
                                                </div>
                                            </div>
                                            <!-- Single Schedule Info -->
                                            <div class="schedule-time-place">
                                                <p><i class="zmdi zmdi-time"></i> 12-14 Jan 2019</p>
                                                <p><i class="zmdi zmdi-map"></i> Mountain Resort, Phoenix, USA</p>
                                            </div>
                                            <!-- Schedule Btn -->
                                            
                                        </div>
                                    </div>

                                    <!-- More Schedule Btn -->
                                    <div class="col-12">
                                        <div class="more-schedule-btn text-center mt-50 wow fadeInUp" data-wow-delay="300ms">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Schedule Area End -->

@endsection
