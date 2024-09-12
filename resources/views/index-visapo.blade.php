<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content>
    <meta name="keywords" content>
    <meta name="app_url" content="{{ \Request::getSchemeAndHttpHost() }}/" />
    {{-- <meta name="app_url" content="{{ \Request::getSchemeAndHttpHost() }}/public/" /> --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <meta name="description"
        content="Le site officiel de Groupe Envol Sarl spécialisé dans l'assistance voyage, l'intermédiation de recrutement aussi bien au pays qu'à l'international et bien d'autres services.">

    <meta name="keywords"
        content="Groupe Envol SARL, Envol Bénin, Envol Benin, Envol SARL, Assistance voyage, assurance voyage, intermédiation de recrutement, recrutement, bourse d'étude et de formation, bourse, Visa étudiant, Visa travailleur, Visa Visiteur, Travailler au canada, Travailler en Roumanie, Visiter le canada, visiter d'autres pays, étudier au canada, Négoces, Vente de billet d'avion" />
    <meta name="author" content="Groupe Envol SARL">
    <meta name="robots" content="noodp" />
    <link rel="canonical" href="https://www.groupeenvol.org/" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Groupe Envol SARL --Accueil" />
    <meta property="og:description"
        content="Le site officiel de Groupe Envol Sarl spécialisé dans l'assistance voyage, l'intermédiation de recrutement aussi bien au pays qu'à l'international et bien d'autres services. " />
    <meta property="og:url" content="https://www.groupeenvol.org/" />
    <meta property="og:site_name" content="Groupe Envol SARL --Accueil" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description"
        content="Le site officiel de Groupe Envol Sarl spécialisé dans l'assistance voyage, l'intermédiation de recrutement aussi bien au pays qu'à l'international et bien d'autres services. " />
    <meta name="twitter:title" content="Groupe Envol SARL --Accueil" />


    <title>
        @yield('title', 'Groupe Envol Sarl --Accueil')
    </title>

    <link rel="icon" type="image/x-icon" href="{{ asset('storage/assets/logo/logo_envol_petit.png') }}">

    {{-- <link rel="stylesheet" href="{{ asset('storage/assets_visapo/css/bootstrap.min.css') }}"> --}}
<link rel="stylesheet" href="{{ asset("storage/assets/bootstrap-5.3.3/css/bootstrap.min.css") }}">

    <link rel="stylesheet" href="{{ asset('storage/assets_visapo/css/all-fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets_visapo/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets_visapo/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets_visapo/css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets_visapo/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('storage/assets_visapo/css/style.css') }}">
    @yield('css_vendor')

    @yield('css')

    <link rel="stylesheet" href="{{ asset("storage/assets/css/style_custom.css") }}"/>
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="loader-box-1"></div>
            <div class="loader-box-2"></div>
        </div>
    </div>


    @include('frontend_visapo.partials.header-visapo')

    <div class="search-popup">
        <button class="close-search"><span class="far fa-times"></span></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>

    <main class="main">

        @yield('content')

    </main>

    <footer class="footer-area">
        <div class="footer-widget">
            <div class="container">
                <div class="row footer-widget-wrapper pt-100 pb-70">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box about-us">
                            <a href="#" class="footer-logo">
                                <img src="{{ asset('storage/assets/logo/logo_envol_petit.png') }}" alt>
                            </a>
                            <p class="mb-20">
                                Laissez-nous vous représenter, Nous sommes fidèles à nos engagements.
                            </p>
                            <div class="footer-contact">
                                <ul>
                                    <li><i class="far fa-map-marker-alt"></i> Ilot 27897, A Bis <br>
                                        Abomey Calavi, République du Bénin <br></li>
                                    <li><a href="tel:+22951874777"><i class="far fa-phone"></i>+229 51 87 47 77</a>
                                    </li>
                                    <li><a href="mailto:info@groupeenvol.org"><i class="far fa-envelope"></i><span
                                                class="__cf_email__"
                                                data-cfemail="2a595f5a5a45585e6a4f524b475a464f04494547">info@groupeenvol.org</span></a>
                                    </li>
                                </ul>
                            </div>
                            <ul class="footer-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Liens utiles</h4>
                            <ul class="footer-list">
                                <li><a href="{{ route('afficherPageAboutUs') }}"><i class="fas fa-caret-right"></i> A
                                        propos de nous</a></li>
                                <li><a href="{{ route('afficherListePaysDestination') }}"><i
                                            class="fas fa-caret-right"></i> Nos pays de destination</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Terms Of Service</a></li>
                                <li><a href="#"><i class="fas fa-caret-right"></i> Privacy policy</a></li>
                                <li><a href="{{ route('afficherPageService') }}"><i class="fas fa-caret-right"></i>
                                        Nos Services</a></li>
                                <li><a href="{{ route('afficherPageTeam') }}"><i class="fas fa-caret-right"></i>
                                        Notre Staff</a></li>
                                {{-- <li><a href="#"><i class="fas fa-caret-right"></i> Latest Blog</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Types de Visa </h4>
                            <ul class="footer-list">

                                @forelse ($all_services_visa as $service)
                                    
                                <li><a href="{{ route("afficherDetailService",["service_id"=>$service->id,"slug"=>$service->url_name]) }}"><i
                                            class="fas fa-caret-right"></i> {{ $service->nom_service }}</a></li>
                                @empty
                                    
                                @endforelse
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-widget-box list">
                            <h4 class="footer-widget-title">Newsletter</h4>
                            <div class="footer-newsletter">
                                <p>Souscrivez à nos Newsletter pour ne rien rater de nos offres.</p>
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Votre adresse Mail">
                                        <button class="theme-btn" type="submit">
                                            Souscrire maintenant <i class="far fa-paper-plane"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 align-self-center">
                        <p class="copyright-text">
                            &copy; Copyright <span id="date"></span> <a href="{{ route('accueil') }}"> Groupe
                                Envol Sarl </a> All Rights
                            Reserved.
                        </p>
                    </div>
                    <div class="col-lg-6 align-self-center">
                        <ul class="footer-menu">
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Terms Of Services</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <a href="#" id="scroll-top"><i class="far fa-long-arrow-up"></i></a>


    {{-- <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
    <script src="{{ asset('storage/assets_visapo/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('storage/assets_visapo/js/modernizr.min.js') }}"></script>
    {{-- <script src="{{ asset('storage/assets_visapo/js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset("storage/assets/bootstrap-5.3.3/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset('storage/assets_visapo/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('storage/assets_visapo/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('storage/assets_visapo/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('storage/assets_visapo/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('storage/assets_visapo/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('storage/assets_visapo/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('storage/assets_visapo/js/counter-up.js') }}"></script>
    <script src="{{ asset('storage/assets_visapo/js/wow.min.js') }}"></script>
    <script src="{{ asset('storage/assets_visapo/js/main.js') }}"></script>


    @yield('js_vendor')
    <script src="{{ asset('storage/assets/js/javascript_general.js') }}"></script>

    @yield('js')

</body>

<!-- Mirrored from live.themewild.com/visapos/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Sep 2024 08:12:52 GMT -->

</html>
