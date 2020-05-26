<!-- Header Area Start -->
    <header class="header-area">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="conferNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{ route('home')}}"><img style="max-height : 100px; max-width: 100px" src="{{ asset('/assets/img/core-img/logo2.png') }}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">
                        <!-- Menu Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>
                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul id="nav">
                                <li class="active"><a href="{{ route('home')}}">Accueil</a></li>
                                <li><a href="">L'évènement</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('presentation')}}">présentation</a></li>
                                        <li><a href="{{ route('programme')}}">Programmes</a></li>
                                        <li><a href="#">Disciplines</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ route('discipline')}}">Nos disciplines</a></li>
                                                <li><a href="{{ route('participer')}}">S'inscrire</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('blog')}}">Actualités</a></li>
                                <li><a href="#">Galérie</a></li>
                                <li><a href="{{ route('contact')}}">Contact</a></li>
                            </ul>

                            <!-- Get Tickets Button -->
                            <a href="{{ route('participer')}}" class="btn confer-btn mt-3 mt-lg-0 ml-3 ml-lg-5">Billeterie <i class="zmdi zmdi-long-arrow-right"></i></a>
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Area End -->