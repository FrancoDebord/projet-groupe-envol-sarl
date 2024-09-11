@extends('index-new')

@section('title', 'Liste des pays que nous desservons')


@section('content')
    <!-- Page Title -->
    <section class="page-title p_relative"
        style="background-image: url({{ asset("storage/assets_vendor/images/background/page-title.jpg") }});">
        <div class="auto-container">
            <div class="content-box p_relative pt_170 pb_170">
                <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Nos Pays de destination</h1>
                <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                    <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a
                            href="{{ route('accueil') }}" class="color_white hov-color">Accueil</a></li>
                    <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Nos pays de destination</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End Page Title -->


    <!-- country-style-two -->
    <section class="country-style-two p_relative pt_120 pb_90">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12 country-block">
                    <div class="country-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block centred bg-white mb_30">
                            <div class="image-box p_relative d_block">
                                <figure class="image p_relative d_block">
                                    <img src="{{ asset("storage/assets_vendor/images/resource/place-1.jpg")}}" alt="">
                                </figure>
                                <div class="flag p_absolute r_20 t_20 b_radius_50"><img src="{{ asset("storage/assets/flags/france.png")}}"
                                        alt=""></div>
                            </div>
                            <div class="lower-content p_relative d_block pt_25 pr_30 pb_20 pl_40">
                                <h4 class="d_block fs_20 lh_30 mb_12"><a href="united-state.html"
                                        class="d_iblock black-color hov-color">France</a></h4>
                                <p class="mb_15 lh_30">Vous avez en projet d'aller en France ?</p>
                                <div class="link"><a href="united-state.html"
                                        class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i
                                            class="fa fa-angle-right"></i>En Savoir Plus</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 country-block">
                    <div class="country-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block centred bg-white mb_30">
                            <div class="image-box p_relative d_block">
                                <figure class="image p_relative d_block">
                                    <img src="{{ asset("storage/assets_vendor/images/resource/place-2.jpg")}}" alt="">
                                </figure>
                                <div class="flag p_absolute r_20 t_20 b_radius_50"><img src="{{ asset("storage/assets/flags/usa.png")}}"
                                        alt=""></div>
                            </div>
                            <div class="lower-content p_relative d_block pt_25 pr_30 pb_20 pl_40">
                                <h4 class="d_block fs_20 lh_30 mb_12"><a href="united-kingdom.html"
                                        class="d_iblock black-color hov-color">Etats-Unis</a></h4>
                                <p class="mb_15 lh_30">Vous avez en projet d'aller aux USA ?</p>
                                <div class="link"><a href="united-kingdom.html"
                                        class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i
                                            class="fa fa-angle-right"></i>En Savoir Plus</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 country-block">
                    <div class="country-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block centred bg-white mb_30">
                            <div class="image-box p_relative d_block">
                                <figure class="image p_relative d_block">
                                    <img src="{{ asset("storage/assets_vendor/images/resource/place-3.jpg")}}" alt="">
                                </figure>
                                <div class="flag p_absolute r_20 t_20 b_radius_50"><img src="{{ asset("storage/assets/flags/canada.png")}}"
                                        alt=""></div>
                            </div>
                            <div class="lower-content p_relative d_block pt_25 pr_30 pb_20 pl_40">
                                <h4 class="d_block fs_20 lh_30 mb_12"><a href="australia.html"
                                        class="d_iblock black-color hov-color">Canada</a></h4>
                                <p class="mb_15 lh_30">Vous avez en projet d'aller au Canada ?</p>
                                <div class="link"><a href="australia.html"
                                        class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i
                                            class="fa fa-angle-right"></i>En Savoir Plus</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 country-block">
                    <div class="country-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box p_relative d_block centred bg-white mb_30">
                            <div class="image-box p_relative d_block">
                                <figure class="image p_relative d_block">
                                    <img src="{{ asset("storage/assets_vendor/images/resource/place-4.jpg")}}" alt="">
                                </figure>
                                <div class="flag p_absolute r_20 t_20 b_radius_50"><img src="{{ asset("storage/assets/flags/uk.png")}}"
                                        alt=""></div>
                            </div>
                            <div class="lower-content p_relative d_block pt_25 pr_30 pb_20 pl_40">
                                <h4 class="d_block fs_20 lh_30 mb_12"><a href="canada.html"
                                        class="d_iblock black-color hov-color">United Kingdom</a></h4>
                                <p class="mb_15 lh_30">Vous avez en projet d'aller au Royaume Uni ?</p>
                                <div class="link"><a href="canada.html"
                                        class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i
                                            class="fa fa-angle-right"></i>En Savoir Plus</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection
