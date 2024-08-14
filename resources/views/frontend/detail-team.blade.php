@extends('index-new')

@section('title',"Groupe Envol Sarl --Détail Team member")
    

@section('content')
    
        <!-- Page Title -->
        <section class="page-title p_relative"
            style="background-image: url({{ asset("storage/assets_vendor/images/background/page-title.jpg") }});">
            <div class="auto-container">
                <div class="content-box p_relative pt_170 pb_170">
                    <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Details d'un membre de l'équipe</h1>
                    <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a
                                href="{{ route("accueil") }}" class="color_white hov-color">Accueil</a></li>
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Details d'un membre de l'équipe</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- team-details -->
        <section class="team-details p_relative pt_120 pb_120">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                        <div class="image-box p_relative d_block mr_20">
                            <div class="image p_relative d_block b_radius_10 mb_25"><img
                                    src="{{ asset("storage/assets_vendor/images/team/".$team_member_detail->photo_member) }}" alt=""></div>
                            <ul class="info clearfix">
                                <li class="p_relative d_block mb_2 fs_18 lh_30"><span class="fw_medium">Tel:</span> <a
                                        href="tel:{{ $team_member_detail->telephone }}" class="hov_color">{{ $team_member_detail->telephone }}</a></li>
                                <li class="p_relative d_block mb_2 fs_18 lh_30"><span class="fw_medium">Email:</span>
                                    <a href="mailto:{{ $team_member_detail->email_member }}" class="hov_color">{{ $team_member_detail->email_member }}</a>
                                </li>
                                <li class="p_relative d_block fs_18 lh_30"><span class="fw_medium">Add:</span> {{ $team_member_detail->adresse }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                        <div class="content-box p_relative d_block ml_20">
                            <div class="text p_relative d_block mb_60">
                                <h2 class="d_block fs_30 lh_40 fw_bold mb_3">{{ $team_member_detail->titre_member." ".$team_member_detail->nom_member." ".$team_member_detail->prenom_member }}</h2>
                                <span class="designation p_relative d_block fs_15 lh_26 mb_25">{{ $team_member_detail->poste_member }}</span>
                                <p class="d_block fs_15 lh_26 mb_25">
                                    {{ $team_member_detail->bio_member }}
                                </p>
                                
                            </div>
                            <div class="social-box p_relative d_block mb_65">
                                <h3 class="fs_22 lh_30 fw_medium mb_12">Suivez-moi sur :</h3>
                                <ul class="social-links clearfix">
                                    <li class="p_relative d_iblock float_left mr_10"><a href="{{ $team_member_detail->facebook }}"
                                            class="d_block fs_14 b_radius_50 centred"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li class="p_relative d_iblock float_left mr_10"><a href="{{ $team_member_detail->twitter }}"
                                            class="d_block fs_14 b_radius_50 centred"><i
                                                class="fab fa-twitter"></i></a></li>
                                    <li class="p_relative d_iblock float_left mr_10"><a href="{{ $team_member_detail->youtube }}"
                                            class="d_block fs_14 b_radius_50 centred"><i
                                                class="fab fa-youtube"></i></a></li>
                                    <li class="p_relative d_iblock float_left"><a href="{{ $team_member_detail->linkedin }}"
                                            class="d_block fs_14 b_radius_50 centred"><i
                                                class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                            <div class="skills-box p_relative d_block mb_65">
                                <h3 class="fs_22 lh_30 fw_bold mb_6">Aptitudes professionnelles:</h3>
                                <div class="progress-inner p_relative d_block mb_40">
                                    <div class="progress-box p_relative d_block mb_20">
                                        <h5 class="d_block fs_18 lh_30 fw_bold blue-color mb_5">Analyse</h5>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="93%"></div>
                                            <div class="count-text p_absolute r_0 b_10 fs_14 fw_medium">93%</div>
                                        </div>
                                    </div>
                                    <div class="progress-box p_relative d_block mb_20">
                                        <h5 class="d_block fs_18 lh_30 fw_bold blue-color mb_5">Qualité</h5>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="69%"></div>
                                            <div class="count-text p_absolute r_0 b_10 fs_14 fw_medium">69%</div>
                                        </div>
                                    </div>
                                    <div class="progress-box p_relative d_block">
                                        <h5 class="d_block fs_18 lh_30 fw_bold blue-color mb_5">Sens de responsabilité</h5>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="90%"></div>
                                            <div class="count-text p_absolute r_0 b_10 fs_14 fw_medium">90%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-inner">
                                <h3 class="fs_22 lh_30 fw_bold mb_35">Contactez-moi</h3>
                                <form action="#" method="post"
                                    class="default-form">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group p_relative d_block mb_30">
                                                <input type="text" name="name" placeholder="Your name"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 column">
                                            <div class="form-group p_relative d_block mb_30">
                                                <input type="email" name="email" placeholder="Your Email"
                                                    required="">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group p_relative d_block mb_30">
                                                <textarea name="message" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 column">
                                            <div class="form-group message-btn p_relative d_block mb-0">
                                                <button type="submit" class="theme-btn btn-two"><span>Envoyer Message</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-details end -->

        {{-- <h2>Voir le profil d'autres membres de notre équipe</h2> --}}

        {{-- @include('frontend.page-team',["all_teams_member"=>$all_teams_member]) --}}

@endsection