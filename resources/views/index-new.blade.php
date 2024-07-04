<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from azim.commonsupport.com/Vistpro/# by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 16:12:29 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="app_url" content="{{\Request::getSchemeAndHttpHost(); }}/" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
<title>
    @yield('title',"Groupe Envol --Accueil")
</title>

<!-- Fav Icon -->
<link rel="icon" href="{{ asset("storage/assets_vendor/images/favicon.ico")}}" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset("storage/assets_vendor/css/font-awesome-all.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/flaticon.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/owl.css")}}" rel="stylesheet">
{{-- <link href="{{ asset("storage/assets_vendor/css/bootstrap.css")}}" rel="stylesheet"> --}}
<link rel="stylesheet" href="{{ asset("storage/assets/bootstrap-5.3.3/css/bootstrap.min.css") }}">
<link rel="stylesheet" href="{{ asset("storage/assets/bootstrap-toggle/css/bootstrap5-toggle.min.css") }}">
<link rel="stylesheet" href="{{ asset("storage/assets/bootstrap-select/css/bootstrap-select.min.css") }}">
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


        <!-- preloader -->
        {{-- <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="G" class="letters-loading">
                               G
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="O" class="letters-loading">
                                O
                            </span>
                            <span data-text-preloader="U" class="letters-loading">
                                U
                            </span>
                            <span data-text-preloader="P" class="letters-loading">
                                P
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                            </span>
                            <span data-text-preloader=" " class="letters-loading">
                                
                            </span>
                            <span data-text-preloader="E" class="letters-loading">
                                E
                             </span>
                             <span data-text-preloader="N" class="letters-loading">
                                 N
                             </span>
                             <span data-text-preloader="V" class="letters-loading">
                                 V
                             </span>
                             <span data-text-preloader="O" class="letters-loading">
                                 O
                             </span>
                             <span data-text-preloader="L" class="letters-loading">
                                 L
                             </span>
                            
                        </div>
                    </div>  
                </div>
            </div>
        </div> --}}
        <!-- preloader end -->


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
                                        <li><a href="#">Nos Services</a></li>
                                        <li><a href="#">Qui sommes-nous ?</a></li>
                                        <li><a href="#">Nos pays de destination</a></li>
                                        <li><a href="#">Notre équipe</a></li>
                                        <li><a href="#">Contact</a></li>
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
                    <p>&copy; Copyright {{ date("y") }} par <a href="#">groupeenvol</a>.org</p>
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
    <script src="{{ asset("storage/assets/bootstrap-select/js/bootstrap-select.js") }}"></script>
    <script src="{{ asset("storage/assets/bootstrap-toggle/js/bootstrap5-toggle.jquery.min.js") }}"></script>
    {{-- <script src="{{ asset("storage/assets_vendor/js/bootstrap.min.js")}}"></script> --}}
    <script src="{{ asset("storage/assets_vendor/js/popper.min.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/owl.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/wow.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/validation.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/jquery.fancybox.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/appear.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/scrollbar.js")}}"></script>

    <!-- main-js -->
    <script src="{{ asset("storage/assets_vendor/js/script.js")}}"></script>

    <script src="{{ asset("storage/assets/js/javascript_general.js") }}"></script>

    @yield('js')


</body><!-- End of .page_wrapper -->

<!-- Mirrored from azim.commonsupport.com/Vistpro/# by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jun 2024 16:12:38 GMT -->
</html>
