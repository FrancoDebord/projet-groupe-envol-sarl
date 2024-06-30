<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Groupe Envol -- Accueil</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset("storage/assets_vendor/css/font-awesome-all.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/flaticon.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/owl.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/bootstrap.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/jquery.fancybox.min.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/animate.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/nice-select.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/color.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/style.css")}}" rel="stylesheet">
<link href="{{ asset("storage/assets_vendor/css/responsive.css")}}" rel="stylesheet">

</head>


<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <div class="loader-wrap">
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
        </div>
        <!-- preloader end -->

        @include('partials.header')

      

        <!-- banner-section -->
        <section class="banner-section">
            <div class="banner-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset("storage/assets_vendor/images/banner/banner-1.jpg")}})"></div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-6 col-lg-12 content-column">
                                <div class="content-box">
                                    <h2>Vous avez envie d'immigrer</h2>
                                    <p> Nous sommes spécialisés dans l'immigration <br /> au Canada, aux USA, en Roumanie.</p>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn btn-one">Plus de détails<i class="flaticon-next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="slide-item style-two">
                    <div class="image-layer" style="background-image:url({{ asset("storage/assets_vendor/images/banner/banner-2.jpg")}})"></div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-6 col-lg-12 content-column offset-xl-6">
                                <div class="content-box">
                                    <h2>Vous voulez travailler à l'international</h2>
                                    <p>Nous faisons des recrutements pour des structures internationales <br /> de façon tout à fait légale</p>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn btn-one">Détails<i class="flaticon-next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{ asset("storage/assets_vendor/images/banner/banner-3.jpg")}})"></div>
                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-xl-6 col-lg-12 content-column">
                                <div class="content-box">
                                    <h2>Laissez-nous vous représenter</h2>
                                    <p>Nous sommes fidèles à nos engagements. <br /> Vous ne serez pas déçus.</p>
                                    <div class="btn-box">
                                        <a href="#" class="theme-btn btn-one">More Details<i class="flaticon-next"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <!-- banner-section end -->


        <!-- service-section -->
        <section class="service-section">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>Bienvenue à ENVOL </h6>
                    <h2>La Solution pour vos projets d'immigration<br />Vos visas</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme">
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset("storage/assets_vendor/images/shape/shape-1.png")}});"></div>
                            <div class="category"><a href="#">Apply</a></div>
                            <div class="icon-box"><img src="{{ asset("storage/assets_vendor/images/icons/icon-1.png")}}" alt=""></div>
                            <p>Immigration & Visa</p>
                            <h3><a href="#">Conseil et Assistance </a></h3>
                            <div class="btn-box"><a href="#"><span>Souscrire à ce service</span></a></div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset("storage/assets_vendor/images/shape/shape-2.png")}});"></div>
                            <div class="category"><a href="#">Apply</a></div>
                            <div class="icon-box"><img src="{{ asset("storage/assets_vendor/images/icons/icon-2.png")}}" alt=""></div>
                            <p>Recrutement à l'international</p>
                            <h3><a href="#">Intermédiation </a></h3>
                            <div class="btn-box"><a href="#"><span>Postuler</span></a></div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset("storage/assets_vendor/images/shape/shape-3.png")}});"></div>
                            <div class="category"><a href="#">Apply</a></div>
                            <div class="icon-box"><img src="{{ asset("storage/assets_vendor/images/icons/icon-3.png")}}" alt=""></div>
                            <p>Négoces</p>
                            <h3><a href="#">Négoces</a></h3>
                            <div class="btn-box"><a href="#"><span>Lire plus de détails</span></a></div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset("storage/assets_vendor/images/shape/shape-1.png")}});"></div>
                            <div class="category"><a href="#">Apply</a></div>
                            <div class="icon-box"><img src="{{ asset("storage/assets_vendor/images/icons/icon-1.png")}}" alt=""></div>
                            <p>Bourse & Formation</p>
                            <h3><a href="#">Bourses & Formation</a></h3>
                            <div class="btn-box"><a href="#"><span>Info</span></a></div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset("storage/assets_vendor/images/shape/shape-2.png")}});"></div>
                            <div class="category"><a href="#">Apply</a></div>
                            <div class="icon-box"><img src="{{ asset("storage/assets_vendor/images/icons/icon-2.png")}}" alt=""></div>
                            <p>Voyage</p>
                            <h3><a href="#">Vente de billet d'avion</a></h3>
                            <div class="btn-box"><a href="#"><span>Infos & Commander</span></a></div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset("storage/assets_vendor/images/shape/shape-3.png")}});"></div>
                            <div class="category"><a href="#">Apply</a></div>
                            <div class="icon-box"><img src="{{ asset("storage/assets_vendor/images/icons/icon-3.png")}}" alt=""></div>
                            <p>Voyage</p>
                            <h3><a href="#">Assurance de voyage</a></h3>
                            <div class="btn-box"><a href="#"><span>Info</span></a></div>
                        </div>
                    </div>
                    <div class="service-block-one">
                        <div class="inner-box">
                            <div class="pattern-layer" style="background-image: url({{ asset("storage/assets_vendor/images/shape/shape-1.png")}});"></div>
                            <div class="category"><a href="#">Apply</a></div>
                            <div class="icon-box"><img src="{{ asset("storage/assets_vendor/images/icons/icon-1.png")}}" alt=""></div>
                            <p>Tout</p>
                            <h3><a href="#">Tous les services</a></h3>
                            <div class="btn-box"><a href="#"><span>Info</span></a></div>
                        </div>
                    </div>
                 
                </div>
            </div>
        </section>
        <!-- service-section end -->


        <!-- dream-section -->
        <section class="dream-section">
            <div class="bg-layer"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                    <div class="row align-items-center clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 left-column">
                            <div class="left-content">
                                <div class="sec-title light">
                                    <h6>Réalisez votre rêve de toujours</h6>
                                    <h2>Notre raison d'être, c'est de vous aider</h2>
                                </div>
                                <div class="text">
                                    <p>Laissez-nous vous représenter. <br />Nous sommes fidèles à nos engagements.</p>
                                    <a href="#"><span>Qui sommes-nous ?</span></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 right-column">
                            <div class="right-content">
                                <ul class="list clearfix">
                                    <li><i class="flaticon-star"></i><a href="#">Conseils et assistance Visa-voyage</a></li>
                                    <li><i class="flaticon-star"></i><a href="#">Intermédiation de recrutement</a></li>
                                    <li><i class="flaticon-star"></i><a href="#">Négoces</a></li>
                                    <li><i class="flaticon-star"></i><a href="#">Bourses d'étude et de formation</a></li>
                                    <li><i class="flaticon-star"></i><a href="#">Vente de billet d'avion</a></li>
                                    <li><i class="flaticon-star"></i><a href="#">Assurance de voyage</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- dream-section end -->


        <!-- visa-section -->
        <section class="visa-section bg-color-1">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>Souscrire à nos services</h6>
                    <h2>Les différentes étapes<br />pour souscrire à nos services</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 visa-block">
                        <div class="visa-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image"><a href="#"><img src="{{ asset("storage/assets_vendor/images/resource/visa-1.jpg")}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="text">
                                        <span>01.</span>
                                        <h4><a href="visa-details.html">Créer un compte </a></h4>
                                        <p>Premièrement, vous créez un compte pour obtenir <strong>Code d'identification</strong></p>
                                        <ul class="list clearfix">
                                            <li><i class="flaticon-diagonal-arrow"></i>Frais : 1000 FCFA</li>
                                            <li><i class="flaticon-diagonal-arrow"></i>Donne droit à un compte</li>
                                            <li><i class="flaticon-diagonal-arrow"></i>Un code d'identification </li>
                                        </ul>
                                    </div>
                                    <div class="link-box">
                                        <a href="#"><span>Créer un compte</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 visa-block">
                        <div class="visa-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image"><a href="#"><img src="{{ asset("storage/assets_vendor/images/resource/visa-2.jpg")}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="text">
                                        <span>02.</span>
                                        <h4><a href="#">Choisir le service</a></h4>
                                        <p>Après l'étape 1, vous pouvez souscrire à un service.</p>
                                        <ul class="list clearfix">
                                            <li><i class="flaticon-diagonal-arrow"></i>Lire la fiche d'information</li>
                                            <li><i class="flaticon-diagonal-arrow"></i>Signer le consentement</li>
                                            <li><i class="flaticon-diagonal-arrow"></i>Fournir les pièces et payer les frais</li>
                                        </ul>
                                    </div>
                                    <div class="link-box">
                                        <a href="#"><span>Choisir un service</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 visa-block">
                        <div class="visa-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image"><a href="#"><img src="{{ asset("storage/assets_vendor/images/resource/visa-3.jpg")}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="text">
                                        <span>03.</span>
                                        <h4><a href="#">Etude de dossier</a></h4>
                                        <p>S'ensuit une étude d'impact sur le marché par rapport à votre dossier. Cette étude détermine le pourcentage de réussite de votre dossier.  </p>
                                        <ul class="list clearfix">
                                            <li><i class="flaticon-diagonal-arrow"></i>Un Score vous est attribué </li>
                                        </ul>
                                    </div>
                                    <div class="link-box">
                                        <a href="#"><span>Mieux comprendre </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 visa-block">
                        <div class="visa-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image"><a href="visa-details-4.html"><img src="{{ asset("storage/assets_vendor/images/resource/visa-4.jpg")}}" alt=""></a></figure>
                                <div class="lower-content">
                                    <div class="text">
                                        <span>04.</span>
                                        <h4><a href="visa-details-4.html">Conseil & Suivi</a></h4>
                                        <p>Nous vous accompagnons dans l'amélioration de votre dossier afin d'augmenter votre chance. Nous vous aidons ensuite à voyager et à vous installer</p>
                                        <ul class="list clearfix">
                                            <li><i class="flaticon-diagonal-arrow"></i>F1 Student Visa</li>
                                            <li><i class="flaticon-diagonal-arrow"></i>J1 Exchange Visitor Visa</li>
                                            <li><i class="flaticon-diagonal-arrow"></i>Non-Academic Visa</li>
                                        </ul>
                                    </div>
                                    <div class="link-box">
                                        <a href="visa-details-4.html"><span>Read More</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- visa-section end -->


        <!-- about-section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <figure class="image"><img src="assets/images/resource/about-1.jpg" alt=""></figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="text-inner">
                                        <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                                        <div class="text">
                                            <h2>14</h2>
                                            <h6>Years of <br />Experienced</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <figure class="image"><img src="assets/images/resource/about-2.jpg" alt=""></figure>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <figure class="image"><img src="assets/images/resource/about-3.jpg" alt=""></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <h6>About Immigo</h6>
                                <h2>We’re Trusted <br />Immigration Consultant</h2>
                            </div>
                            <div class="inner">
                                <div class="icon"><img src="assets/images/icons/icon-4.png" alt=""></div>
                                <h6>U.S based</h6>
                                <h3>Immigration Consultant Agency.</h3>
                            </div>
                            <div class="text">
                                <p>All this mistaken idea of denouncing pleasure and praising pain was born and will give you a complete account of the system, and expound the actual teach- ings of the great explorer of the truth, the master-builder of human happiness. No one rejects dislikes or avoids pleasures itself because it is all pleasure but because those who do not know how pursue those who fail their duty through weakness of will, which is the same as saying.</p>
                            </div>
                            <div class="btn-box">
                                <a href="about.html" class="theme-btn btn-two">More Details <i class="flaticon-next"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- countries-section end -->
        <section class="countries-section centred" style="background-image: url(assets/images/background/service-bg.jpg);">
            <div class="auto-container">
                <div class="sec-title centred light">
                    <h6>Countries We Offer</h6>
                    <h2>Best Countries to Travel</h2>
                </div>
            </div>
            <div class="project-tab">
                <div class="tab-btn-box">
                    <div class="auto-container">
                        <div class="tab-btns product-tab-btns clearfix">
                            <div class="p-tab-btn active-btn" data-tab="#tab-1">
                                <h2>Education</h2>
                            </div>
                            <div class="p-tab-btn" data-tab="#tab-2">
                                <h2>Immigration</h2>
                            </div>
                            <div class="p-tab-btn" data-tab="#tab-3">
                                <h2>Business</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="auto-container">
                    <div class="p-tabs-content">
                        <div class="p-tab active-tab" id="tab-1">
                            <div class="three-item-carousel owl-carousel owl-theme">
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-1.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-1.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details.html">8 Big Universities In USA..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details.html">United States</a></h4>
                                                <p>Moment so blinded by desire that they...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-2.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-2.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-2.html">8 Big Universities In Aus..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-2.html">Australia</a></h4>
                                                <p>The same as saying shrinking from all toil...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-3.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-3.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-3.html">8 Big Universities In Canada..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-3.html">Canada</a></h4>
                                                <p>Perfectly simple & easy to distinguish free...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-1.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-1.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details.html">8 Big Universities In USA..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details.html">United States</a></h4>
                                                <p>Moment so blinded by desire that they...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-2.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-2.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-2.html">8 Big Universities In Aus..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-2.html">Australia</a></h4>
                                                <p>The same as saying shrinking from all toil...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-3.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-3.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-3.html">8 Big Universities In Canada..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-3.html">Canada</a></h4>
                                                <p>Perfectly simple & easy to distinguish free...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-1.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-1.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details.html">8 Big Universities In USA..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details.html">United States</a></h4>
                                                <p>Moment so blinded by desire that they...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-2.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-2.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-2.html">8 Big Universities In Aus..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-2.html">Australia</a></h4>
                                                <p>The same as saying shrinking from all toil...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-3.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-3.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-3.html">8 Big Universities In Canada..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-3.html">Canada</a></h4>
                                                <p>Perfectly simple & easy to distinguish free...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-2">
                            <div class="three-item-carousel owl-carousel owl-theme">
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-1.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-1.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details.html">8 Big Universities In USA..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details.html">United States</a></h4>
                                                <p>Moment so blinded by desire that they...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-2.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-2.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-2.html">8 Big Universities In Aus..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-2.html">Australia</a></h4>
                                                <p>The same as saying shrinking from all toil...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-3.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-3.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-3.html">8 Big Universities In Canada..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-3.html">Canada</a></h4>
                                                <p>Perfectly simple & easy to distinguish free...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-1.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-1.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details.html">8 Big Universities In USA..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details.html">United States</a></h4>
                                                <p>Moment so blinded by desire that they...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-2.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-2.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-2.html">8 Big Universities In Aus..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-2.html">Australia</a></h4>
                                                <p>The same as saying shrinking from all toil...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-3.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-3.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-3.html">8 Big Universities In Canada..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-3.html">Canada</a></h4>
                                                <p>Perfectly simple & easy to distinguish free...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-1.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-1.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details.html">8 Big Universities In USA..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details.html">United States</a></h4>
                                                <p>Moment so blinded by desire that they...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-2.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-2.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-2.html">8 Big Universities In Aus..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-2.html">Australia</a></h4>
                                                <p>The same as saying shrinking from all toil...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-3.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-3.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-3.html">8 Big Universities In Canada..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-3.html">Canada</a></h4>
                                                <p>Perfectly simple & easy to distinguish free...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-3">
                            <div class="three-item-carousel owl-carousel owl-theme">
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-1.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-1.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details.html">8 Big Universities In USA..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details.html">United States</a></h4>
                                                <p>Moment so blinded by desire that they...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-2.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-2.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-2.html">8 Big Universities In Aus..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-2.html">Australia</a></h4>
                                                <p>The same as saying shrinking from all toil...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-3.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-3.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-3.html">8 Big Universities In Canada..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-3.html">Canada</a></h4>
                                                <p>Perfectly simple & easy to distinguish free...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-1.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-1.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details.html">8 Big Universities In USA..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details.html">United States</a></h4>
                                                <p>Moment so blinded by desire that they...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-2.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-2.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-2.html">8 Big Universities In Aus..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-2.html">Australia</a></h4>
                                                <p>The same as saying shrinking from all toil...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-3.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-3.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-3.html">8 Big Universities In Canada..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-3.html">Canada</a></h4>
                                                <p>Perfectly simple & easy to distinguish free...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-1.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-1.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details.html">8 Big Universities In USA..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details.html">United States</a></h4>
                                                <p>Moment so blinded by desire that they...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-2.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-2.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-2.html">8 Big Universities In Aus..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-2.html">Australia</a></h4>
                                                <p>The same as saying shrinking from all toil...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="countries-block-one">
                                    <div class="inner-box">
                                        <div class="image-box">
                                            <div class="flag"><img src="assets/images/resource/flag-3.jpg" alt=""></div>
                                            <figure class="image"><img src="assets/images/resource/country-3.jpg" alt=""></figure>
                                            <div class="link"><a href="countries-details-3.html">8 Big Universities In Canada..</a></div>
                                        </div>
                                        <div class="lower-content">
                                            <div class="text">
                                                <h4><a href="countries-details-3.html">Canada</a></h4>
                                                <p>Perfectly simple & easy to distinguish free...</p>
                                            </div>
                                            <div class="overlay-text">
                                                <p>The same as saying shrinking from all toil do what we like every best.</p>
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
        <!-- countries-section end -->


        <!-- coaching-section -->
        <section class="coaching-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h6>Coaching Classes</h6>
                    <h2>Our Training & Certification</h2>
                    <div class="btn-box"><a href="coaching.html" class="theme-btn btn-two">View More <i class="flaticon-next"></i></a></div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                        <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/resource/coaching-1.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="icon-box"><a href="coaching-details.html"><i class="flaticon-diagonal-arrow-1"></i></a></div>
                                    <h5><a href="coaching-details.html">ielts</a></h5>
                                    <h4><a href="coaching-details.html">Coaching</a></h4>
                                </div>
                                <div class="overlay-content">
                                    <div class="icon-box"><a href="coaching-details.html"><i class="flaticon-diagonal-arrow-1"></i></a></div>
                                    <h5><a href="coaching-details.html">ielts</a></h5>
                                    <h4><a href="coaching-details.html">Coaching</a></h4>
                                    <p>Extremely painful again is there anyone loves or pursues.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                        <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/resource/coaching-2.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="icon-box"><a href="coaching-details-2.html"><i class="flaticon-diagonal-arrow-1"></i></a></div>
                                    <h5><a href="coaching-details-2.html">toefl</a></h5>
                                    <h4><a href="coaching-details-2.html">Coaching</a></h4>
                                </div>
                                <div class="overlay-content">
                                    <div class="icon-box"><a href="coaching-details-2.html"><i class="flaticon-diagonal-arrow-1"></i></a></div>
                                    <h5><a href="coaching-details-2.html">toefl</a></h5>
                                    <h4><a href="coaching-details-2.html">Coaching</a></h4>
                                    <p>Extremely painful again is there anyone loves or pursues.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                        <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/resource/coaching-3.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="icon-box"><a href="coaching-details-3.html"><i class="flaticon-diagonal-arrow-1"></i></a></div>
                                    <h5><a href="coaching-details-3.html">pte</a></h5>
                                    <h4><a href="coaching-details-3.html">Coaching</a></h4>
                                </div>
                                <div class="overlay-content">
                                    <div class="icon-box"><a href="coaching-details-3.html"><i class="flaticon-diagonal-arrow-1"></i></a></div>
                                    <h5><a href="coaching-details-3.html">pte</a></h5>
                                    <h4><a href="coaching-details-3.html">Coaching</a></h4>
                                    <p>Extremely painful again is there anyone loves or pursues.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 coaching-block">
                        <div class="coaching-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/resource/coaching-4.jpg" alt=""></figure>
                                <div class="content-box">
                                    <div class="icon-box"><a href="coaching-details-4.html"><i class="flaticon-diagonal-arrow-1"></i></a></div>
                                    <h5><a href="coaching-details-4.html">oet</a></h5>
                                    <h4><a href="coaching-details-4.html">Coaching</a></h4>
                                </div>
                                <div class="overlay-content">
                                    <div class="icon-box"><a href="coaching-details-4.html"><i class="flaticon-diagonal-arrow-1"></i></a></div>
                                    <h5><a href="coaching-details-4.html">oet</a></h5>
                                    <h4><a href="coaching-details-4.html">Coaching</a></h4>
                                    <p>Extremely painful again is there anyone loves or pursues.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- coaching-section end -->


        <!-- destination-section -->
        <section class="destination-section">
            <div class="bg-layer bg-color-1"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <figure class="image"><img src="assets/images/resource/destination-1.jpg" alt=""></figure>
                    <div class="content-box">
                        <div class="shape">
                            <div class="shape-1" style="background-image: url(assets/images/shape/shape-6.png);"></div>
                            <div class="shape-2" style="background-image: url(assets/images/shape/shape-7.png);"></div>
                        </div>
                        <h2>Fly Your Dream Destination</h2>
                        <p>Idea of denouncing pleasure & praising pain was born.</p>
                        <ul class="list clearfix">
                            <li><i class="flaticon-checkbox-mark"></i>Entering & Leaving From Country</li>
                            <li><i class="flaticon-checkbox-mark"></i>Visas</li>
                            <li><i class="flaticon-checkbox-mark"></i>Country Citizenship</li>
                        </ul>
                        <div class="btn-box">
                            <a href="contact.html" class="theme-btn btn-one">Contact Us<i class="flaticon-next"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- destination-section end -->


        <!-- chooseus-section -->
        <section class="chooseus-section bg-color-1 centred">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>Why Choose Us</h6>
                    <h2>Offer Tailor Made Services That <br />Our Client Requires</h2>
                </div>
                <div class="inner-content">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><img src="assets/images/icons/icon-5.png" alt=""></div>
                                    <h4>Direct Interviews</h4>
                                    <p>Expound actual teachings too the great explorers truth.</p>
                                    <a href="index-2.html"><span>Read&nbsp;More</span><i class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><img src="assets/images/icons/icon-6.png" alt=""></div>
                                    <h4>Faster Processing</h4>
                                    <p>Give you a completed account the expound the teachings.</p>
                                    <a href="index-2.html"><span>Read&nbsp;More</span><i class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><img src="assets/images/icons/icon-7.png" alt=""></div>
                                    <h4>Visa Assistance</h4>
                                    <p>Expound actual teachings too the great explorers truth.</p>
                                    <a href="index-2.html"><span>Read&nbsp;More</span><i class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 chooseus-block">
                            <div class="chooseus-block-one">
                                <div class="inner-box">
                                    <div class="icon-box"><img src="assets/images/icons/icon-8.png" alt=""></div>
                                    <h4>Cost-Effective</h4>
                                    <p>Give you a completed account the expound the teachings.</p>
                                    <a href="index-2.html"><span>Read&nbsp;More</span><i class="flaticon-next"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lower-box">
                    <h2>Guiding on preparing for <a href="index-2.html">eligibility exams to visa</a> assistance.</h2>
                    <a href="coaching.html" class="theme-btn btn-two">Get Assistance <i class="flaticon-next"></i></a>
                </div>
            </div>
        </section>
        <!-- chooseus-section end -->


        <!-- team-section -->
        <section class="team-section centred">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>Expert Team Members</h6>
                    <h2>Our Team at Your Service</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/team/team-1.jpg" alt=""></figure>
                                    <ul class="list clearfix">
                                        <li class="share-option">
                                            <span class="share-icon"><i class="flaticon-share"></i></span>
                                            <ul class="share-links clearfix">
                                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="mailto:info@example.com"><i class="flaticon-open-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="index-2.html">Reggie Hunter</a></h4>
                                    <span class="designation">Founder & Managing Partner</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/team/team-2.jpg" alt=""></figure>
                                    <ul class="list clearfix">
                                        <li class="share-option">
                                            <span class="share-icon"><i class="flaticon-share"></i></span>
                                            <ul class="share-links clearfix">
                                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="mailto:info@example.com"><i class="flaticon-open-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="index-2.html">Roman Frederick</a></h4>
                                    <span class="designation">Regional Manager, Operations</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="assets/images/team/team-3.jpg" alt=""></figure>
                                    <ul class="list clearfix">
                                        <li class="share-option">
                                            <span class="share-icon"><i class="flaticon-share"></i></span>
                                            <ul class="share-links clearfix">
                                                <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="mailto:info@example.com"><i class="flaticon-open-envelope"></i></a></li>
                                    </ul>
                                </div>
                                <div class="lower-content">
                                    <h4><a href="index-2.html">Ruby Valentina</a></h4>
                                    <span class="designation">Immigration Consultants</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-section end -->


        <!-- testimonial-section -->
        <section class="testimonial-section" style="background-image: url(assets/images/background/testimonial-bg.jpg);">
            <div class="auto-container">
                <div class="sec-title light">
                    <h6>Client Reviews</h6>
                    <h2>Feedback From Our Clients</h2>
                </div>
                <div class="three-item-carousel owl-carousel owl-theme owl-dots-none">
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="text">
                                <h4>Smooth & Efficient Service!...</h4>
                                <p>Immigo Consultancy is definitely a highly recommended canadian an migration agency. A big applause & very grateful to Mr.Richardson for efforts and assistance.</p>
                            </div>
                            <div class="lower-box">
                                <div class="quote"><img src="assets/images/icons/quote-1.png" alt=""></div>
                                <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.jpg" alt=""></figure>
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                </ul>
                                <h4>Silverster Scott, <span>Netherland</span></h4>
                                <span class="date">October 10, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="text">
                                <h4>Thank You Immigo!...</h4>
                                <p>Immigo visa consultancy is the best we came across while doing market research & migrating to Canada. All informations conveyed were correct genuine and helpful.</p>
                            </div>
                            <div class="lower-box">
                                <div class="quote"><img src="assets/images/icons/quote-1.png" alt=""></div>
                                <figure class="author-thumb"><img src="assets/images/resource/testimonial-2.jpg" alt=""></figure>
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                </ul>
                                <h4>Nora Penelope, <span>Switcherland</span></h4>
                                <span class="date">October 09, 2021</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-block-one">
                        <div class="inner-box">
                            <div class="text">
                                <h4>Highly Recommended!...</h4>
                                <p>Awesome customer service, they know what they are doing. Straight to the point, help with the forms if you need it. Amazing results always. We 100% recommend to others.</p>
                            </div>
                            <div class="lower-box">
                                <div class="quote"><img src="assets/images/icons/quote-1.png" alt=""></div>
                                <figure class="author-thumb"><img src="assets/images/resource/testimonial-3.jpg" alt=""></figure>
                                <ul class="rating clearfix">
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                    <li><i class="flaticon-star"></i></li>
                                </ul>
                                <h4>Arlo Sebastian, <span>Australia</span></h4>
                                <span class="date">October 09, 2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-section end -->


        <!-- news-section -->
        <section class="news-section">
            <div class="auto-container">
                <div class="sec-title centred">
                    <h6>News & Updates</h6>
                    <h2>Read Our Latest Insights</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <h2>14<span>Oct</span></h2>
                                    <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-1.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/news/author-1.jpg" alt=""></figure>
                                        <h6><a href="blog-details.html">Immigration</a></h6>
                                        <span>Post By: Colmin O'Neill</span>
                                    </div>
                                    <h4><a href="blog-details.html">Citizenship Concept on How to Become a UK Citizen</a></h4>
                                    <p>Laborious physical exercise excepts obtain some advantage from...</p>
                                    <div class="lower-box clearfix">
                                        <div class="link pull-left"><a href="blog-details.html"><span>REad More</span></a></div>
                                        <ul class="info clearfix pull-right">
                                            <li><i class="far fa-heart"></i><a href="blog-details.html">36</a></li>
                                            <li><i class="far fa-comment"></i><a href="blog-details.html">08</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <h2>05<span>Oct</span></h2>
                                    <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-2.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/news/author-2.jpg" alt=""></figure>
                                        <h6><a href="blog-details.html">Resident Visa</a></h6>
                                        <span>Post By: Layla Madison</span>
                                    </div>
                                    <h4><a href="blog-details.html">7 Benefits of Being a Permanent Resident in Canada</a></h4>
                                    <p>Foresee the pain and trouble that are bound ensue equal blame belongs...</p>
                                    <div class="lower-box clearfix">
                                        <div class="link pull-left"><a href="blog-details.html"><span>REad More</span></a></div>
                                        <ul class="info clearfix pull-right">
                                            <li><i class="far fa-heart"></i><a href="blog-details.html">12</a></li>
                                            <li><i class="far fa-comment"></i><a href="blog-details.html">03</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <h2>26<span>Sep</span></h2>
                                    <figure class="image"><a href="blog-details.html"><img src="assets/images/news/news-3.jpg" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <div class="author-box">
                                        <figure class="author-thumb"><img src="assets/images/news/author-3.jpg" alt=""></figure>
                                        <h6><a href="blog-details.html">News & Tips</a></h6>
                                        <span>Post By: Boone Gerardo</span>
                                    </div>
                                    <h4><a href="blog-details.html">Three Common Mistakes in Visa Applications</a></h4>
                                    <p>Laborious physical exercise excepts obtain some advantage from...</p>
                                    <div class="lower-box clearfix">
                                        <div class="link pull-left"><a href="blog-details.html"><span>REad More</span></a></div>
                                        <ul class="info clearfix pull-right">
                                            <li><i class="far fa-heart"></i><a href="blog-details.html">06</a></li>
                                            <li><i class="far fa-comment"></i><a href="blog-details.html">15</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- clients-section -->
        <section class="clients-section">
            <div class="outer-container">
                <div class="clients-carousel owl-carousel owl-theme owl-dots-none owl-nav-none">
                    <figure class="clients-logo-box">
                        <a href="index-2.html"><img src="assets/images/clients/clients-logo-1.png" alt=""></a>
                        <span class="logo-title"><a href="index-2.html">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index-2.html"><img src="assets/images/clients/clients-logo-2.png" alt=""></a>
                        <span class="logo-title"><a href="index-2.html">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index-2.html"><img src="assets/images/clients/clients-logo-3.png" alt=""></a>
                        <span class="logo-title"><a href="index-2.html">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index-2.html"><img src="assets/images/clients/clients-logo-4.png" alt=""></a>
                        <span class="logo-title"><a href="index-2.html">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index-2.html"><img src="assets/images/clients/clients-logo-5.png" alt=""></a>
                        <span class="logo-title"><a href="index-2.html">Visit Website</a></span>
                    </figure>
                    <figure class="clients-logo-box">
                        <a href="index-2.html"><img src="assets/images/clients/clients-logo-6.png" alt=""></a>
                        <span class="logo-title"><a href="index-2.html">Visit Website</a></span>
                    </figure>
                </div>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- contact-section end -->
        <section class="contact-section bg-color-1">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-8.png);"></div>
            <div class="bg-layer" style="background-image: url(assets/images/background/contact-bg.jpg);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-xl-6 col-lg-12 offset-xl-6 content-column">
                        <div class="content-box">
                            <div class="sec-title">
                                <h6>eligible to apply</h6>
                                <h2>Check Your Eligibility</h2>
                                <p>Please, fulfill the form to get a consultation. After processing the data, apersonal manager will contact you.</p>
                            </div>
                            <div class="form-inner">
                                <form action="https://st.ourhtmldemo.com/new/Immigo/index.html" method="post">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="fname" placeholder="First Name" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="lname" placeholder="Last Name" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="code" placeholder="Country Code" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <input type="text" name="phone" placeholder="Phone" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="Marital Status">Marital Status</option>
                                                   <option value="1">Married</option>
                                                   <option value="2">Unmarried</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   <option data-display="Monthly Income">Monthly Income</option>
                                                   <option value="1">$1500</option>
                                                   <option value="2">$2000</option>
                                                   <option value="3">$2500</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="email" name="email" placeholder="Email Address" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <input type="text" name="occupation" placeholder="Current Occupation" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                            <button class="theme-btn btn-two">Check Now <i class="flaticon-next"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section end -->


        <!-- main-footer -->
        <footer class="main-footer">
            <div class="footer-top">
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="logo-widget footer-widget">
                                <figure class="footer-logo"><a href="index-2.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                                <div class="text">
                                    <p>Indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire that they cannot foresee pain trouble.</p>
                                </div>
                                <div class="inner">
                                    <div class="icon"><i class="flaticon-pdf"></i></div>
                                    <h6><a href="index-2.html">Guidence Notes</a></h6>
                                    <h5><a href="index-2.html">Visa Application Form</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <div class="widget-title">
                                    <h4>Quick Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index-2.html">Career</a></li>
                                        <li><a href="index-2.html">Agents</a></li>
                                        <li><a href="index-2.html">About</a></li>
                                        <li><a href="index-2.html">Contact</a></li>
                                        <li><a href="index-2.html">News</a></li>
                                        <li><a href="index-2.html">Webinars</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <div class="widget-title">
                                    <h4>Our Services</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index-2.html">Business</a></li>
                                        <li><a href="index-2.html">Evaluation</a></li>
                                        <li><a href="index-2.html">Migrate</a></li>
                                        <li><a href="index-2.html">Study</a></li>
                                        <li><a href="index-2.html">Counselling</a></li>
                                        <li><a href="index-2.html">Work / Career</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <div class="widget-title">
                                    <h4>Support Links</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="index-2.html">Pay Online</a></li>
                                        <li><a href="index-2.html">Career</a></li>
                                        <li><a href="index-2.html">FAQ’s</a></li>
                                        <li><a href="index-2.html">Appointment</a></li>
                                        <li><a href="index-2.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="gallery-widget footer-widget">
                                <div class="widget-title">
                                    <h4>Our Gallery</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="image-list clearfix">
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-1.jpg" alt="">
                                                <a href="assets/images/resource/footer-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-2.jpg" alt="">
                                                <a href="assets/images/resource/footer-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-3.jpg" alt="">
                                                <a href="assets/images/resource/footer-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-4.jpg" alt="">
                                                <a href="assets/images/resource/footer-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-5.jpg" alt="">
                                                <a href="assets/images/resource/footer-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-6.jpg" alt="">
                                                <a href="assets/images/resource/footer-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="flaticon-zoom-in"></i></a>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="auto-container">
                    <div class="bottom-inner clearfix">
                        <div class="copyright pull-left">
                            <p>&copy; 2022 <a href="index-2.html">Immigo</a>. All Rights Reserved.</p>
                        </div>
                        <ul class="footer-nav pull-right clearfix">
                            <li><a href="index-2.html">Privacy Policy</a></li>
                            <li><a href="index-2.html">Term Of Use</a></li>
                            <li><a href="index-2.html">Support</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->


        <!-- scroll to top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="flaticon-chevron"></i>
        </button>
    </div>


    <!-- jequery plugins -->
    <script src="{{ asset("storage/assets_vendor/js/jquery.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/popper.min.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/bootstrap.min.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/owl.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/wow.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/validation.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/jquery.fancybox.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/appear.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/scrollbar.js")}}"></script>
    <script src="{{ asset("storage/assets_vendor/js/jquery.nice-select.min.js")}}"></script>

    <!-- main-js -->
    <script src="{{ asset("storage/assets_vendor/js/script.js")}}"></script>

</body><!-- End of .page_wrapper -->

<!-- Mirrored from st.ourhtmldemo.com/new/Immigo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jun 2024 16:22:15 GMT -->
</html>
