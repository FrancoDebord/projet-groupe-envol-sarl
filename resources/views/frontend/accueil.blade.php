@extends('index-new')


@section('content')
          
@include('partials.section-slider')
    
         @include('partials.section-feature')
    
          @include('partials.section_about')
    
    
         @include('partials.section_service')
    
    
           @include('partials.section_country')
    
        @include('partials.section_testimonials')
    
    
          @include('partials.section_coaching')
    
    
            <!-- cta-section -->
            {{-- <section class="cta-section p_relative">
                <div class="bg-layer bg-color-2 p_absolute l_0 b_0"></div>
                <div class="auto-container">
                    <div class="inner-container p_relative d_block theme-color-bg b_radius_10 pt_85 pb_75 pl_60 clearfix">
                        <div class="pattern-layer p_absolute l_0 t_0" style="background-image: url({{ asset("storage/assets_vendor/images/shape/shape-4.png")}});"></div>
                        <figure class="image-box p_absolute t_0 r_0"><img src="{{ asset("storage/assets_vendor/images/resource/cta-1.jpg")}}" alt=""></figure>
                        <div class="text pull-left">
                            <h2 class="d_block fw_exbold color-white">Are you Looking for Visa <br />Consultation?</h2>
                        </div>
                        <div class="btn-box pull-right mt_5">
                            <a href="#" class="theme-btn">book appointment</a>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- cta-section end -->
    
    
            <!-- news-section -->
            {{-- <section class="news-section p_relative sec-pad">
                <div class="bg-layer p_absolute l_0 t_0 bg-color-2"></div>
                <div class="auto-container">
                    <div class="sec-title p_relative d_block mb_50 centred">
                        <span class="p_relative d_block fs_14 lh_20 fw_sbold theme-color mb_7">News & Updates</span>
                        <h2 class="p_relative d_block lh_55 fw_exbold">Recent Blog Posts</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10 tran_5">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block">
                                            <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                            <img src="{{ asset("storage/assets_vendor/images/news/news-1.jpg")}}" alt="">
                                        </figure>
                                        <span class="post-date p_absolute r_30 b_0 w_120 fs_12 color-white fw_sbold z_1">20 Sep, 2021</span>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_30">
                                        <h3 class="d_block fs_22 lh_30 mb_5"><a href="blog-details.html" class="d_iblock black-color hov-color">Top reasons for australian working visa rejection</a></h3>
                                        <ul class="post-info clearfix p_relative d_block tran_5">
                                            <li class="p_relative d_iblock float_left fs_14 fw_medium mr_25"><a href="blog-details.html" class="d_iblock hov-color">By Admin</a></li>
                                            <li class="p_relative d_iblock float_left fs_14 fw_medium"><a href="blog-details.html" class="d_iblock hov-color">2 Comments</a></li>
                                        </ul>
                                        <div class="link p_absolute l_30 b_30"><a href="blog-details.html" class="p_relative d_iblock fs_14 fw_medium theme-color">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10 tran_5">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block">
                                            <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                            <img src="{{ asset("storage/assets_vendor/images/news/news-2.jpg")}}" alt="">
                                        </figure>
                                        <span class="post-date p_absolute r_30 b_0 w_120 fs_12 color-white fw_sbold z_1">20 Sep, 2021</span>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_30">
                                        <h3 class="d_block fs_22 lh_30 mb_5"><a href="blog-details.html" class="d_iblock black-color hov-color">Canada federal skilled worker program</a></h3>
                                        <ul class="post-info clearfix p_relative d_block tran_5">
                                            <li class="p_relative d_iblock float_left fs_14 fw_medium mr_25"><a href="blog-details.html" class="d_iblock hov-color">By Admin</a></li>
                                            <li class="p_relative d_iblock float_left fs_14 fw_medium"><a href="blog-details.html" class="d_iblock hov-color">5 Comments</a></li>
                                        </ul>
                                        <div class="link p_absolute l_30 b_30"><a href="blog-details.html" class="p_relative d_iblock fs_14 fw_medium theme-color">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                            <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <div class="inner-box p_relative d_block b_radius_10 tran_5">
                                    <div class="image-box p_relative d_block">
                                        <figure class="image p_relative d_block">
                                            <a href="blog-details.html"><i class="fas fa-link"></i></a>
                                            <img src="{{ asset("storage/assets_vendor/images/news/news-3.jpg")}}" alt="">
                                        </figure>
                                        <span class="post-date p_absolute r_30 b_0 w_120 fs_12 color-white fw_sbold z_1">20 Sep, 2021</span>
                                    </div>
                                    <div class="lower-content p_relative d_block pt_25 pr_30 pb_30 pl_30">
                                        <h3 class="d_block fs_22 lh_30 mb_5"><a href="blog-details.html" class="d_iblock black-color hov-color">Aliqum mullam blandit tempor sapien gravida</a></h3>
                                        <ul class="post-info clearfix p_relative d_block tran_5">
                                            <li class="p_relative d_iblock float_left fs_14 fw_medium mr_25"><a href="blog-details.html" class="d_iblock hov-color">By Admin</a></li>
                                            <li class="p_relative d_iblock float_left fs_14 fw_medium"><a href="blog-details.html" class="d_iblock hov-color">3 Comments</a></li>
                                        </ul>
                                        <div class="link p_absolute l_30 b_30"><a href="blog-details.html" class="p_relative d_iblock fs_14 fw_medium theme-color">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- news-section end -->
    
    
        @include('partials.section_clients')
    
@endsection