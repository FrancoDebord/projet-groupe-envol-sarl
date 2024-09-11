   <!-- main header -->
   <header class="main-header">
       <div class="auto-container">
           <!-- header-top -->
           <div class="header-top">
               <div class="top-inner clearfix">
                   <div class="left-column pull-left">
                       <ul class="info-list clearfix">
                           <li><i class="fas fa-phone-square"></i><a href="tel:+22951874777">+229 51 87 47 77</a></li>
                           <li><i class="fas fa-envelope"></i><a
                                   href="mailto:info@groupeenvol.org">info@groupeenvol.org</a></li>
                           <li>
                               @guest
                                   <a href="{{ route('login') }}">
                                       <i class="fa fa-sign-in-alt">&nbsp;</i>
                                       Se connecter
                                   </a>
                               @endguest

                               @auth
                                   <a href="#" onclick="document.getElementById('logout-form').submit()">
                                       <i class="fa fa-sign-out-alt">&nbsp;</i>
                                       Logout ({{  Auth::user()->name}})
                                   </a>

                                   <form method="POST" action="{{ route('logout', ['return_url' => route('accueil')]) }}"
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
                   <div class="right-column pull-right">
                       <ul class="social-links clearfix">
                           <li><a href="#"><i class="fab fab fa-twitter"></i></a></li>
                           <li><a href="#"><i class="fab fab fa-facebook-f"></i></a></li>
                           <li><a href="#"><i class="fab fab fa-dribbble"></i></a></li>
                           <li><a href="#"><i class="fab fab fa-instagram"></i></a></li>
                       </ul>
                       {{-- <div class="btn-box"><a href="#">Book Appointment</a></div> --}}
                   </div>
               </div>
           </div>
           <!-- header-lower -->
           <div class="header-lower">
               <div class="outer-box clearfix">
                   <div class="logo-box">
                       <figure class="logo"><a href="index.html"><img
                                   src="{{ asset('storage/assets/logo/Logo-site1.jpg') }}" alt=""></a></figure>
                   </div>
                   <div class="menu-area clearfix">
                       <!--Mobile Navigation Toggler-->
                       <div class="mobile-nav-toggler">
                           <i class="icon-bar"></i>
                           <i class="icon-bar"></i>
                           <i class="icon-bar"></i>
                       </div>
                       <nav class="main-menu navbar-expand-md navbar-light">
                           <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                               {{-- <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Home Page 01</a></li>
                                        <li><a href="index-2.html">Home Page 02</a></li>
                                        <li><a href="index-onepage.html">OnePage Home</a></li>
                                        <li><a href="index-rtl.html">RTL Home</a></li>
                                        <li class="dropdown"><a href="index.html">Header Style</a>
                                            <ul>
                                                <li><a href="index.html">Header Style 01</a></li>
                                                <li><a href="index-2.html">Header Style 02</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="index.html">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="team.html">Our Agents</a></li>
                                        <li><a href="team-details.html">Agents Details</a></li>
                                        <li><a href="error.html">404</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="index.html">Coaching</a>
                                    <ul>
                                        <li><a href="coaching.html">Coaching</a></li>
                                        <li><a href="coaching-details.html">Citizenship Test</a></li>
                                        <li><a href="coaching-details-2.html">TOEFL</a></li>
                                        <li><a href="coaching-details-3.html">Take IELTS</a></li>
                                        <li><a href="coaching-details-4.html">PTE Coaching</a></li>
                                        <li><a href="coaching-details-5.html">Management Test</a></li>
                                        <li><a href="coaching-details-6.html">Skills Exam</a></li>
                                    </ul>
                                </li> 
                                <li class="dropdown"><a href="index.html">Services</a>
                                    <ul>
                                        <li><a href="service.html">Our Services</a></li>
                                        <li><a href="service-details.html">Business Visa</a></li>
                                        <li><a href="service-details-2.html">Students Visa</a></li>
                                        <li><a href="service-details-3.html">Work Visa</a></li>
                                        <li><a href="service-details-4.html">Family Visa</a></li>
                                        <li><a href="service-details-5.html">Tourists Visa</a></li>
                                        <li><a href="service-details-6.html">Diplomatic Visa</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="index.html">Country</a>
                                    <ul>
                                        <li><a href="country.html">Country</a></li>
                                        <li><a href="united-state.html">United States</a></li>
                                        <li><a href="united-kingdom.html">United Kingdom</a></li>
                                        <li><a href="australia.html">Australia</a></li>
                                        <li><a href="canada.html">Canada</a></li>
                                        <li><a href="south-africa.html">South Africa</a></li>
                                        <li><a href="new-zealand.html">New Zealand</a></li>
                                        <li><a href="dubai.html">Dubai</a></li>
                                        <li><a href="china.html">China</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="index.html">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>  
                                <li><a href="contact.html">Contact</a></li> 
                            </ul> --}}
                               <ul class="navigation clearfix">

                                   <li><a href="{{ route('accueil') }}">Accueil</a></li>
                                   <li class="dropdown"><a href="#">Qui sommes-nous ?</a>
                                       <ul>
                                           <li><a href="{{ route('afficherPageAboutUs') }}">A propos de Groupe Envol
                                                   SARL</a></li>
                                           <li><a href="{{ route('afficherPageTeam') }}">Notre Equipe</a></li>
                                           <li><a href="#">FAQ’s</a></li>

                                       </ul>
                                   </li>
                                   <li class="dropdown"><a href="{{ route('afficherPageService') }}">NOS SERVICES</a>
                                       <ul>

                                           @forelse ($all_services as $service)
                                               <li><a href="{{ route($service->url_service)  }}">{{ $service->nom_service }}</a></li>
                                           @empty
                                           @endforelse
                                           {{-- <li><a href="#">Conseils et assistance Visa-voyage</a></li>
                                        <li><a href="#">Intermédiation de récrutement</a></li>
                                        <li><a href="#">Négoces</a></li>
                                        <li><a href="#">Bourses d'étude et de formation</a></li>
                                        <li><a href="#">Vente de billet d'avion</a></li>
                                        <li><a href="#">Assurance de voyage</a></li> --}}
                                       </ul>
                                   </li>

                                   <li><a href="{{ route('inscription') }}">Inscription / Connexion</a></li>


                                   <li class="dropdown"><a href="{{ route("afficherListePaysDestination") }}">PAYS</a>
                                       <ul>
                                           <li><a href="{{ route("afficherListePaysDestination") }}">Tous les pays</a></li>
                                           <li><a href="#">France</a></li>
                                           <li><a href="#">Etats-Unis</a></li>
                                           <li><a href="#">Canada</a></li>
                                           <li><a href="#">Royaume Uni</a></li>

                                       </ul>
                                   </li>
                                   <li><a href="{{ route("afficherPageContact") }}">Contactez-nous</a></li>
                               </ul>
                           </div>
                       </nav>
                       <div class="nav-right clearfix">
                           <div class="search-box-outer">
                               <div class="dropdown">
                                   <button class="search-box-btn" type="button" id="dropdownMenu3"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                           class="flaticon-magnifying-glass"></i></button>
                                   <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3">
                                       <div class="form-container">
                                           <form method="post" action="#">
                                               <div class="form-group">
                                                   <input type="search" name="search-field" value=""
                                                       placeholder="Search...." required="">
                                                   <button type="submit" class="search-btn"><span
                                                           class="fas fa-search"></span></button>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <!--sticky Header-->
       <div class="sticky-header">
           <div class="auto-container">
               <div class="outer-box clearfix">
                   {{-- <div class="logo-box pull-left">
                    <figure class="logo"><a href="#"><img src="{{ asset("storage/assets/logo/logo_envol_petit.png")}}" alt=""></a></figure>
                </div> --}}
                   <div class="menu-area clearfix pull-right">
                       <nav class="main-menu clearfix">
                           <!--Keep This Empty / Menu will come through Javascript-->
                       </nav>
                       <div class="nav-right clearfix">
                           <div class="search-box-outer">
                               <div class="dropdown">
                                   <button class="search-box-btn" type="button" id="dropdownMenu4"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                           class="flaticon-magnifying-glass"></i></button>
                                   <div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu4">
                                       <div class="form-container">
                                           <form method="post" action="#">
                                               <div class="form-group">
                                                   <input type="search" name="search-field" value=""
                                                       placeholder="Search...." required="">
                                                   <button type="submit" class="search-btn"><span
                                                           class="fas fa-search"></span></button>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
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
           <div class="nav-logo"><a href="#"><img src="{{ asset('storage/assets/logo/Logo-site1.jpg') }}"
                       alt="" title=""></a></div>
           <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
           </div>
           <div class="contact-info">
               <h4>Contact Info</h4>
               <ul>
                   <li>Siège social : Ilot 27897, A bis Tchinagbegbo</li>
                   <li><a href="tel:+22951874777">+229 51874777</a></li>
                   <li><a href="mailto:info@groupeenvol@org">info@groupeenvol@org</a></li>
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
