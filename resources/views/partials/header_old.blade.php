      <!-- main header -->
      <header class="main-header header-style-one">
        <!-- header-top -->
        <div class="header-top">
            <div class="outer-container clearfix">
                <div class="left-column pull-left">
                    <ul class="info clearfix">
                        <li><i class="flaticon-pin"></i>Calavi, Face CS Bakhita</li>
                        <li><i class="flaticon-email"></i><a href="mailto:info@groupeenvol.org">info@groupeenvol.org</a></li>
                        <li><i class="flaticon-clock-circular-outline"></i>Lun _ Sam: 9.00 to 18.00</li>
                    </ul>
                </div>
                <div class="right-column clearfix pull-right">
                    <ul class="social-links clearfix pull-left">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="index#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                    <div class="search-inner pull-left">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input type="search" name="search-field" placeholder="Search..." required>
                                <button type="submit"><i class="flaticon-loupe"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="btn-box pull-left">
                        <a href="index-2.html">Prendre rendez-vous <i class="flaticon-arrow-pointing-to-right"></i></a>
                    </div>
                    {{-- <div class="language pull-left">
                        <a href="index-2.html"><img src="assets/images/icons/flag-1.png" alt=""></a>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- header-middle -->
        <div class="header-middle">
            <div class="outer-container clearfix centred">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route("accueil") }}"><img src="{{ asset("storage/assets_vendor/images/logo.png")}}" alt=""></a></figure>
                </div>
                {{-- <div class="text">
                    <p><span><i class="flaticon-open-book-1"></i>Updates:</span>Immigo Welcomes Vaccinated Residents for Travel as of Oct 02, 2021... <a href="index-2.html">Read More<i class="flaticon-next"></i></a></p>
                </div> --}}
            </div>
        </div>
        <!-- header-lower -->
        <div class="header-lower">
            <div class="outer-box clearfix">
                <div class="menu-area pull-left clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="{{ route("accueil") }}">Accueil</a>
                                   
                                </li>
                                <li class="dropdown"><a href="#">Qui sommes-nous ?</a>
                                    <ul>
                                        <li><a href="#">A propos de Groupe Envol SARL</a></li>
                                        <li><a href="#">Notre Equipe</a></li>
                                        <li><a href="#">FAQ’s</a></li>
                                        {{-- <li><a href="error.html">404</a></li> --}}
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="#">NOS SERVICES</a>
                                    <ul>
                                        <li><a href="#">Conseils et assistance Visa-voyage</a></li>
                                        <li><a href="#">Intermédiation de récrutement</a></li>
                                        <li><a href="#">Négoces</a></li>
                                        <li><a href="#">Bourses d'étude et de formation</a></li>
                                        <li><a href="#">Vente de billet d'avion</a></li>
                                        <li><a href="#">Assurance de voyage</a></li>
                                    </ul>
                                </li> 
                                
                                @guest
                                <li><a href="#">S'inscrire / Se connecter</a></li>   
                                @endguest
                                <li><a href="#">Contact</a></li>   
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-right-content pull-right">
                    <div class="option-box clearfix">
                        <div class="login"><a href="#"><i class="flaticon-login"></i>Login</a></div>
                        <div class="faq"><a href="#"><i class="flaticon-faq"></i>Faq’s</a></div>
                    </div>
                    <div class="support-box">
                        <div class="image"><img src="{{ asset("storage/assets_vendor/images/resource/support-1.jpg")}}" alt=""></div>
                        <h6>Plus d'infos</h6>
                        <h5><a href="tel:+22967437538">+229 67 43 75 38</a></h5>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="menu-area pull-left clearfix">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                    <div class="menu-right-content pull-right">
                        <div class="option-box clearfix">
                            <div class="login"><a href="#"><i class="flaticon-login"></i>Login</a></div>
                            <div class="faq"><a href="#"><i class="flaticon-faq"></i>Faq’s</a></div>
                        </div>
                        <div class="support-box">
                            <div class="image"><img src="{{ asset("storage/assets_vendor/images/resource/support-1.jpg")}}" alt=""></div>
                            <h6>Plus d'infos</h6>
                            <h5><a href="tel:+22967437538">+229 67 43 75 38</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

      <!-- Mobile Menu  -->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>
        
        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="{{ asset("storage/assets_vendor/images/logo-2.png")}}" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Calavi, CS Bakhita, Bénin</li>
                    <li><a href="tel:+22967437538">+229 67 43 75 38</a></li>
                    <li><a href="mailto:info@groupeenvol.org">info@groupeenvol.org</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->
