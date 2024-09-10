   <!-- service-section -->
   <section class="service-section p_relative pt_175 pb_110">
    <div class="pattern-layer p_absolute l_170" style="background-image: url({{ asset("storage/assets_vendor/images/shape/shape-2.png")}});"></div>
    <div class="bg-layer p_absolute l_0 t_0"></div>
    <div class="auto-container">
        <div class="inner-container p_relative pb_60 mb_50">
            <div class="sec-title p_relative d_block mb_40 centred">
                <span class="p_relative d_block fs_14 lh_20 fw_sbold theme-color mb_7">Qu'est-ce que nous offrons d'autre ?</span>
                <h2 class="p_relative d_block lh_55 fw_exbold">Nous avons d'autres <br />Services pour vous</h2>
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
                                <p class="mb_15">Nous sommes dans l'assurance des voyage. Nous assurons vos arrières pour vous permettre de profiter à fond de vos voyage et d'atteindre pleinement vos obectifs..</p>
                                <div class="link"><a href="{{ route("afficherDetailServiceAssuranceVoyage") }}" class="p_relative d_iblock fs_14 fw_sbold black-color hov-color pl_12"><i class="fa fa-angle-right"></i>En savoir plus</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="more-text centred">Voyez toutes les informations sur nos services <a href="#" class="d_iblock fw_sbold theme-color">Find Your Solution</a></div> --}}
    </div>
</section>
<!-- service-section end -->