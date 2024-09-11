<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Vistpro/# by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 16:12:29 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="app_url" content="{{\Request::getSchemeAndHttpHost(); }}/public/" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<title>
    @yield('title',"Groupe Envol --Accueil")
</title>

<meta name="description" content="Le site officiel de Groupe Envol Sarl spécialisé dans l'assistance voyage, l'intermédiation de recrutement aussi bien au pays qu'à l'international et bien d'autres services.">
   
<meta name="keywords" content="Groupe Envol SARL, Envol Bénin, Envol Benin, Envol SARL, Assistance voyage, assurance voyage, intermédiation de recrutement, recrutement, bourse d'étude et de formation, bourse, Visa étudiant, Visa travailleur, Visa Visiteur, Travailler au canada, Travailler en Roumanie, Visiter le canada, visiter d'autres pays, étudier au canada, Négoces, Vente de billet d'avion"/>
<meta name="author" content="Groupe Envol SARL" >
<meta name="robots" content="noodp"/>
<link rel="canonical" href="https://www.groupeenvol.org/" />
<meta property="og:locale" content="fr_FR" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Groupe Envol SARL --Accueil" />
<meta property="og:description" content="Le site officiel de Groupe Envol Sarl spécialisé dans l'assistance voyage, l'intermédiation de recrutement aussi bien au pays qu'à l'international et bien d'autres services. " />
<meta property="og:url" content="https://www.groupeenvol.org/" />
<meta property="og:site_name" content="Groupe Envol SARL --Accueil" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Le site officiel de Groupe Envol Sarl spécialisé dans l'assistance voyage, l'intermédiation de recrutement aussi bien au pays qu'à l'international et bien d'autres services. " />
<meta name="twitter:title" content="Groupe Envol SARL --Accueil" />


<!-- Fav Icon -->
<link rel="icon" href="{{ asset("storage/assets/logo/logo_envol_petit.png")}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset("storage/assets_vendor/css/font-awesome-all.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/flaticon.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/owl.css")}}" rel="stylesheet">
{{-- <link href="{{ asset("storage/assets_vendor/css/bootstrap.css")}}" rel="stylesheet"> --}}
<link rel="stylesheet" href="{{ asset("storage/assets/bootstrap-5.3.3/css/bootstrap.min.css") }}">
<link rel="stylesheet" href="{{ asset("storage/assets/bootstrap-toggle/css/bootstrap5-toggle.min.css") }}">
{{-- <link rel="stylesheet" href="{{ asset("storage/assets/bootstrap-select/css/bootstrap-select.min.css") }}"> --}}
<link href="{{ asset("storage/assets_vendor/css/jquery.fancybox.min.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/animate.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/color.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/global.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/elpath.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/style.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/responsive.css")}}" rel="stylesheet">

<link rel="stylesheet" href="{{ asset("storage/assets/css/style_custom.css") }}"/>

@yield('css')

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">



       @session('message')
           <div class="row mt-3">
            <div class="col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 ">
                <p class="alert alert-danger p-2">
                    <i class="fa fa-exclamation-triangle">&nbsp;</i>

                    {{ session()->get('message'); }}
                </p>

            </div>
           </div>
       @endsession

     @include('partials.header')

        @yield('content')

        <!-- main-footer -->
        <section class="main-footer">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="top-inner">
                        <div class="info-box">
                            <div class="icon-box"><i class="flaticon-message"></i></div>
                            <span>Adresse mail</span>
                            <h5><a href="mailto:info@groupeenvol.org">info@groupeenvol.org</a></h5>
                        </div>
                        <figure class="footer-logo"><a href="#"><img src="{{ asset("storage/assets/logo/Logo-site1.jpg")}}" alt=""></a></figure>
                        <div class="info-box">
                            <div class="icon-box"><i class="flaticon-phone-call"></i></div>
                            <span>Numéro d'appel</span>
                            <h5><a href="tel:+22951874777">+22951874777</a></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="widget-section">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h4>A propos de Groupe Envol SARL</h4>
                                </div>
                                <div class="widget-content">
                                    <p>Laissez-nous vous représenter, Nous sommes fidèles à nos engagements.</p>
                                    <ul class="social-links clearfix">
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml_80">
                                <div class="widget-title">
                                    <h4>Liens utiles</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{ route("afficherPageService") }}">Nos Services</a></li>
                                        <li><a href="{{ route("afficherPageAboutUs") }}">Qui sommes-nous ?</a></li>
                                        <li><a href="{{ route("afficherListePaysDestination") }}">Nos pays de destination</a></li>
                                        <li><a href="{{ route("afficherPageTeam")  }}">Notre équipe</a></li>
                                        <li><a href="{{ route("afficherPageContact") }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h4>Explorer</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="#">FAQ</a></li>
                                        <li><a href="#">Termes d'utilisation</a></li>
                                        <li><a href="#">Politique de confidentialité</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget newsletter-widget">
                                <div class="widget-title">
                                    <h4>Newsletter</h4>
                                </div>
                                <div class="widget-content">
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="Email address" required="">
                                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                                        </div>
                                        <div class="form-group">
                                            <div class="check-box">
                                                <input class="check" type="checkbox" id="checkbox">
                                                <label for="checkbox">J'accepte les termes et les conditions d'utilisation.</label>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright centred">
                    <p>&copy; Copyright {{ date("Y") }} par <a href="#">groupeenvol</a>.org</p>
                </div>
            </div>
        </section>
        <!-- main-footer end -->


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-long-arrow-up"></span>
        </div>
        </button>


    <!-- jequery plugins -->
    {{-- <script src="{{ asset("storage/assets/js/jquery.min.3.7.1.js")}}"></script> --}}
    <script src="{{ asset("storage/assets_vendor/js/jquery.js")}}"></script>
    <script src="{{ asset("storage/assets/bootstrap-5.3.3/js/bootstrap.min.js")}}"></script>
    {{-- <script src="{{ asset("storage/assets/bootstrap-select/js/bootstrap-select.js") }}"></script> --}}
    <script src="{{ asset("storage/assets/bootstrap-toggle/js/bootstrap5-toggle.jquery.min.js") }}"></script>
    {{-- <script src="{{ asset("storage/assets_vendor/js/bootstrap.min.js")}}"></script> --}}
    <script src="{{ asset("storage/assets_vendor/js/popper.min.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/owl.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/wow.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/validation.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/jquery.fancybox.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/appear.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/scrollbar.js")}}"></script>

    @yield('js')
    
    <!-- main-js -->
    <script src="{{ asset("storage/assets_vendor/js/script.js")}}"></script>

    <script src="{{ asset("storage/assets/js/javascript_general.js") }}"></script>



</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Vistpro/# by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 16:12:38 GMT -->
</html>
