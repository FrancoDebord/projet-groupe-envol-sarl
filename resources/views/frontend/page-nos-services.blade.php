@extends('index-new')

@section('title', 'Groupe Envol Sarl --Nos services')

@section('content')
    <!-- Page Title -->
    <section class="page-title p_relative"
        style="background-image: url({{ asset('storage/assets_vendor/images/background/page-title.jpg') }});">
        <div class="auto-container">
            <div class="content-box p_relative pt_170 pb_170">
                <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Nos Services</h1>
                <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                    <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a
                            href="{{ route('accueil') }}" class="color_white hov-color">Accueil</a></li>
                    <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Nos services</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->



    <section class="service-section p_relative pt_175 pb_110">
        <div class="pattern-layer p_absolute l_170" style="background-image: url({{ asset("storage/assets_vendor/images/shape/shape-2.png")}});"></div>
        <div class="bg-layer p_absolute l_0 t_0"></div>
        <div class="auto-container">
            <div class="inner-container p_relative pb_60 mb_50">
                <div class="sec-title p_relative d_block mb_40 centred">
                    <span class="p_relative d_block fs_14 lh_20 fw_sbold theme-color mb_7">Que faisons-nous ?</span>
                    <h2 class="p_relative d_block lh_55 fw_exbold">Nos différents <br />Services pour vous</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10">
                                <figure class="image-box p_relative d_block"><img src="{{ asset("storage/assets/services/education.jpg")}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                    <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-family"></i></div>
                                    <h3 class="d_block fs_24 lh_30 mb_25"><a href="{{ route("afficherDetailServiceBourse") }}" class="d_iblock black-color hov-color">Bourse d'étude et de formation</a></h3>
                                    <p class="mb_15">Votre éducation est très importante pour nous. Nous cherchons des bourses d'étude et de formation pour vous.</p>
                                    <div class="link"><a href="{{ route("afficherDetailServiceBourse") }}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>En savoir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10">
                                <figure class="image-box p_relative d_block"><img src="{{ asset("storage/assets/services/billet_avion.jpg")}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                    <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-work-from-home"></i></div>
                                    <h3 class="d_block fs_24 lh_30 mb_25"><a href="{{ route("afficherDetailServiceVenteBilletAvion") }}" class="d_iblock black-color hov-color">Vente de billet d'avion</a></h3>
                                    <p class="mb_15">Nous faisons les courses pour vous alléger votre voyage. Nous pouvons vous vendre les billets d'avion et vous l'apporter chez vous en toute tranquillité. </p>
                                    <div class="link"><a href="{{ route("afficherDetailServiceVenteBilletAvion") }}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>En savoir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10">
                                <figure class="image-box p_relative d_block"><img src="{{ asset("storage/assets/services/assurance_voyage.jpg")}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                    <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-travel"></i></div>
                                    <h3 class="d_block fs_24 lh_30 mb_25"><a href="{{ route("afficherDetailServiceAssuranceVoyage") }}" class="d_iblock black-color hov-color">Assurance voyage</a></h3>
                                    <p class="mb_15">Nous sommes dans l'assurance des voyage. Nous assurons vos arrières pour vous permettre de profiter à fond de vos voyage et d'atteindre pleinement vos obectifs.</p>
                                    <div class="link"><a href="{{ route("afficherDetailServiceAssuranceVoyage") }}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>En savoir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row clearfix mt-5">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10">
                                <figure class="image-box p_relative d_block"><img src="{{ asset("storage/assets/services/assistance_voyage.jpg")}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                    <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-family"></i></div>
                                    <h3 class="d_block fs_24 lh_30 mb_25">
                                        <a href="{{ route("afficherDetailServiceConseilAssistanceVoyage") }}" class="d_iblock black-color hov-color">
                                        Conseils et assistance Visa-voyage</a></h3>
                                    <p class="mb_15">Nous vous aidons à concrétiser vos projets de voyage..</p>
                                    <div class="link"><a href="{{ route("afficherDetailServiceConseilAssistanceVoyage") }}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>En savoir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10">
                                <figure class="image-box p_relative d_block"><img src="{{ asset("storage/assets/services/intermediation.jpg")}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                    <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-work-from-home"></i></div>
                                    <h3 class="d_block fs_24 lh_30 mb_25"><a href="{{ route("afficherDetailServiceIntermediationRecrutement") }}" class="d_iblock black-color hov-color">
                                        Intermédiation de récrutement</a></h3>
                                    <p class="mb_15">Vous rêvez de travailler à l'extérieur ? Nous avons des opportunités pour vous. </p>
                                    <div class="link"><a href="{{ route("afficherDetailServiceIntermediationRecrutement") }}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>En savoir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10">
                                <figure class="image-box p_relative d_block"><img src="{{ asset("storage/assets/services/negoces.jpg")}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                    <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-travel"></i></div>
                                    <h3 class="d_block fs_24 lh_30 mb_25"><a href="{{ route("afficherDetailServiceNegoces") }}" class="d_iblock black-color hov-color">
                                        Négoces</a></h3>
                                    <p class="mb_15">Nous menons des activités de négoces pour des structures même au niveau international.</p>
                                    <div class="link"><a href="{{ route("afficherDetailServiceNegoces") }}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>En savoir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <div class="row clearfix mt-5">
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10">
                                <figure class="image-box p_relative d_block"><img src="{{ asset("storage/assets/services/visa_etudiant.jpg")}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                    <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-family"></i></div>
                                    <h3 class="d_block fs_24 lh_30 mb_25">
                                        <a href="{{ route("afficherDetailServiceVisaEtudiant") }}" class="d_iblock black-color hov-color">
                                        Visa Etudiant</a></h3>
                                    <p class="mb_15">Vous avez besoin d'un visa Etudiant ?</p>
                                    <div class="link"><a href="{{ route("afficherDetailServiceVisaEtudiant") }}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>En savoir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10">
                                <figure class="image-box p_relative d_block"><img src="{{ asset("storage/assets/services/visa_travailleur.jpg")}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                    <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-work-from-home"></i></div>
                                    <h3 class="d_block fs_24 lh_30 mb_25"><a href="{{ route("afficherDetailServiceVisaTravailleur") }}" class="d_iblock black-color hov-color">
                                        Visa Travailleur</a></h3>
                                    <p class="mb_15">Vous avez besoin d'un visa Travailleur ?</p>
                                    <div class="link"><a href="{{ route("afficherDetailServiceVisaTravailleur") }}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>En savoir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box p_relative d_block b_radius_10">
                                <figure class="image-box p_relative d_block"><img src="{{ asset("storage/assets/services/negoces.jpg")}}" alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_40">
                                    <div class="icon-box p_absolute r_20 w_100 h_100 lh_110 centred fs_65 bg-white theme-color b_radius_10 tran_5 z_2"><i class="flaticon-travel"></i></div>
                                    <h3 class="d_block fs_24 lh_30 mb_25"><a href="{{ route("afficherDetailServiceVisaVisiteur") }}" class="d_iblock black-color hov-color">
                                        Visa Visiteur</a></h3>
                                    <p class="mb_15">Vous avez besoin d'un visa Visiteur ?</p>
                                    <div class="link"><a href="{{ route("afficherDetailServiceVisaVisiteur") }}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>En savoir plus</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </section>



    <!-- cta-section -->
    <section class="cta-section p_relative pb_120">
        <div class="auto-container">
            <div class="inner-container p_relative d_block bg-color-logo b_radius_10 pt_85 pb_75 pl_60 clearfix">
                <div class="pattern-layer p_absolute l_0 t_0"
                    style="background-image: url(assets/images/shape/shape-4.png);"></div>
                <figure class="image-box p_absolute t_0 r_0"><img src="assets/images/resource/cta-1.jpg" alt="">
                </figure>
                <div class="text pull-left">
                    <h2 class="d_block fw_exbold color-white">Vous avez un projet de voyage ou avez besoin d'une assistance ?</h2>
                </div>
                <div class="btn-box pull-right mt_5">
                    <a href="{{ route("inscription") }}" class="theme-btn">Inscrivez-vous pour l'un de nos services</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-section end -->


@endsection
