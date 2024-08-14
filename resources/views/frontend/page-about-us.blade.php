@extends("index-new")
    
@section('title',"Groupe Envol Sarl --A propos de nous")
    

@section('content')
<section class="page-title p_relative" style="background-image: url({{ asset("storage/assets_vendor/images/background/page-title.jpg") }});">
    <div class="auto-container">
        <div class="content-box p_relative pt_170 pb_170">
            <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">A propos de Nous</h1>
            <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="{{ route("accueil") }}" class="color_white hov-color">Accueil</a></li>
                <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">A propos de nous</li>
            </ul>
        </div>
    </div>
</section>


<section class="about-style-three p_relative sec-pad">
    <div class="pattern-layer p_absolute l_0" style="background-image: url({{ asset("storage/assets_vendor/images/shape/shape-1.png") }});"></div>
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div class="image_block_1">
                    <div class="image-box p_relative d_block pb_30">
                        <figure class="image p_relative d_block image-1 b_radius_10 tran_5"><img src="{{ asset("storage/assets_vendor/images/resource/about-5.jpg") }}" alt=""></figure>
                        <div class="text p_absolute t_160 b_radius_10 b_shadow_7 bg-white pt_35 pr_40 pb_35 pl_110">
                            <div class="icon-box p_absolute l_30 t_30 fs_65 theme-color"><i class="flaticon-customer-service"></i></div>
                            <h5 class="d_block fs_18">Rencontrer notre équipe</h5>
                        </div>
                        <div class="text-two centred p_absolute l_30 b_0 bg-color-logo  b_radius_10 pt_30 pr_15 pb_30 pl_15">
                            <h4 class="fs_20 lh_30 color-white">Nous avons l'expérience nécessaire pour vous accompagner</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_3">
                    <div class="content-box p_relative d_block ml_50">
                        <div class="sec-title p_relative d_block mb_40">
                            <span class="p_relative d_block fs_14 lh_20 fw_sbold mb_7 theme-color">Qui sommes-nous ?</span>
                            <h2 class="p_relative d_block lh_55 fw_exbold">Nous vous accompagnons dans tous vos projets de voyage</h2>
                        </div>
                        <div class="inner p_relative d_block mb_40">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item p_relative d_block">
                                        <div class="icon-box p_relative d_block fs_16 theme-color mb_2"><i class="fas fa-check-circle"></i></div>
                                        <h5 class="d_block fs_18 lh_30 fw_sbold mb_3">Notre vision</h5>
                                        <p>
                                            Accompagner toute personne désireuse de voyager à réaliser leurs projets.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="single-item p_relative d_block">
                                        <div class="icon-box p_relative d_block fs_16 theme-color mb_2"><i class="fas fa-check-circle"></i></div>
                                        <h5 class="d_block fs_18 lh_30 fw_sbold mb_3">Notre mission</h5>
                                        <p>
                                            Aider chacun à réaliser ses projets.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text p_relative d_block mb_50">
                            <p>
                                <strong class="text-danger"> A Groupe Envol Sarl</strong>, notre ambition est d'aider chaque personne à réaliser ses projets de voyage. Nos offres sont abordables et nous sommes professionnels.
                            </p>

                            <p class="display-4 text-color-logo">Laissez-nous vous représenter, nous sommes fidèles à nos engagements.</p>
                        </div>
                        <div class="author-box p_relative d_block pl_100">
                            <figure class="author-thumb p_absolute l_0 w_75 h_75 b_radius_50"><img src="{{ asset("storage/assets_vendor/images/resource/author-1.jpg") }}" alt=""></figure>
                            <div class="signature"><img src="{{ asset("storage/assets_vendor/images/icons/signature-1.png") }}" alt=""></div>
                        </div>

                      
                    </div>
                </div>
            </div>

           
       
    </div>

</section>

@include('partials.section_service')
@include('partials.section-feature')


@endsection
        

