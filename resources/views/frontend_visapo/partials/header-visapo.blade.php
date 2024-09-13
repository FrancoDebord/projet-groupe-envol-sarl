<header class="header">

    <div class="header-top">
        <div class="container">
            <div class="header-top-wrapper">
                <div class="header-top-left">
                    <div class="header-top-contact">
                        <ul>
                            {{-- <li><a href="#"><i class="far fa-map-marker-alt"></i>25/B Milford Road, New
                                    York</a> --}}
                            {{-- </li> --}}
                            <li><a href="tel:+22951874777"><i class="far fa-phone"></i>+229 51 87 47 77</a></li>
                            <li><a href="mailto:info@groupeenvol.org"><i class="far fa-envelope"></i><span
                                        class="__cf_email__"
                                        data-cfemail="d4bdbab2bb94b1acb5b9a4b8b1fab7bbb9">info@groupeenvol.org</span></a>
                            </li>


                            <li>
                                @guest
                                    <a href="{{ route('login') }}"><i class="far fa-sign-in"></i>Se connecter</a>

                                @endguest

                                @auth
                                    <a href="#" onclick="document.getElementById('logout-form').submit()">
                                        <i class="fa fa-sign-out-alt">&nbsp;</i>
                                        Logout ({{ Auth::user()->name }})
                                    </a>

                                    <form method="POST"
                                        action="{{ route('logout', ['return_url' => route('accueil')]) }}"
                                        id="logout-form" style="display: none;">
                                        @csrf

                                    </form>

                                @endauth
                            </li>

                            @auth

                      
                            @if (Auth::user()->type_user != 'client')
                                <li>
                                    <a href="{{ route('accueilAdminPage') }}">
                                        <i class="fa fa-lock-alt">&nbsp;</i>
                                        Backend
                                    </a>
                                </li>
                            @endif

                            <li>
                                <a href="{{ route('afficherPageListeInscriptionsClient') }}">
                                    <i class="fa fa-paper-plane">&nbsp;</i>
                                    Vos inscriptions
                                </a>
                            </li>

                        @endauth

                        </ul>
                    </div>
                </div>
                <div class="header-top-right">
                    <div class="header-top-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route("accueil") }}">
                    <img src="{{ asset("storage/assets/logo/logo_envol_petit.png")}}" alt="logo" style=" width: 113px;">
                </a>
                <div class="mobile-menu-right">
                    <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="far fa-stream"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="{{ route("accueil") }}"
                                data-bs-toggle="dropdown">Accueil</a>
                            <ul class="dropdown-menu fade-up">
                                <li><a class="dropdown-item" href="{{ route("accueil") }}">Accueil</a></li>
                                <li><a class="dropdown-item" href="{{ route("afficherPageAboutUs") }}">Qui sommes-nous ?</a></li>
                                <li><a class="dropdown-item" href="{{ route("afficherPageAboutUs") }}">A propos de nous
                                    SARL</a></li>
                                <li><a class="dropdown-item" href="{{ route("afficherPageTeam") }}">Notre Equipe</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route("afficherPageService") }}"
                                data-bs-toggle="dropdown">NOS SERVICES</a>
                            <ul class="dropdown-menu fade-up">

                                <li><a class="dropdown-item" href="{{ route("afficherPageService")  }}">Tous nos services</a></li>


                                @forelse ($all_services as $service)
                                <li><a class="dropdown-item" href="{{ route("afficherDetailService",["service_id"=>$service->id,"slug"=>$service->url_name]) }}">{{ $service->nom_court_service }}</a></li>
                            @empty
                            @endforelse
                              
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="{{ route("inscription") }}">Inscription à un service</a></li>
                       
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route("afficherListePaysDestination") }}"
                                data-bs-toggle="dropdown">Pays</a>
                            <ul class="dropdown-menu fade-up">
                                <li><a class="dropdown-item" href="{{ route("afficherListePaysDestination") }}">Tous les Pays</a></li>

                                @forelse ($all_pays_destination as $pays_destination)
                                        
                               
                                <li><a class="dropdown-item" href="{{ route("pageDetailPaysDestination",["id"=>$pays_destination->id,"slug"=>Str::slug($pays_destination->nom_pays)]) }}">
                                    {{ $pays_destination->nom_pays }}</a></li>
                                @empty
                                    
                                @endforelse
                            </ul>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#"
                                data-bs-toggle="dropdown">Pages</a>
                            <ul class="dropdown-menu fade-up">
                                <li><a class="dropdown-item" href="about.html">About Us</a></li>
                                <li><a class="dropdown-item" href="team.html">Our Team</a></li>
                                <li><a class="dropdown-item" href="service.html">Services</a></li>
                                <li><a class="dropdown-item" href="service-single.html">Service Single</a></li>
                                <li><a class="dropdown-item" href="faq.html">Faq</a></li>
                                <li><a class="dropdown-item" href="login.html">Login</a></li>
                                <li><a class="dropdown-item" href="register.html">Register</a></li>
                                <li><a class="dropdown-item" href="forgot-password.html">Forgot Password</a></li>
                                <li><a class="dropdown-item" href="404.html">404 Error</a></li>
                                <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
                                <li><a class="dropdown-item" href="terms.html">Terms Of Service</a></li>
                                <li><a class="dropdown-item" href="privacy.html">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                            <ul class="dropdown-menu fade-up">
                                <li><a class="dropdown-item" href="blog.html">Blog</a></li>
                                <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
                            </ul>
                        </li> --}}
                        <li class="nav-item"><a class="nav-link" href="{{ route("afficherPageContact") }}">Contactez-nous</a></li>
                    </ul>
                    <div class="header-nav-right">
                        <div class="header-nav-search">
                            <a href="#" class="search-box-outer"><i class="far fa-search"></i></a>
                        </div>
                        <div class="header-btn">
                            <a href="{{ route("inscription") }}" class="theme-btn">S'inscrire<i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
