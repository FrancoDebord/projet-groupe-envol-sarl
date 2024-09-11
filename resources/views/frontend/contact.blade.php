@extends('index-new')

@section('title', 'Contactez-nous')


@section('content')



    <section class="page-title p_relative"
        style="background-image: url({{ asset('storage/assets_vendor/images/background/page-title.jpg') }});">
        <div class="auto-container">
            <div class="content-box p_relative pt_170 pb_170">
                <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Contactez-nous</h1>
                <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                    <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a
                            href="{{ route('accueil') }}" class="color_white hov-color">Accueil</a></li>
                    <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Contactez-nous</li>
                </ul>
            </div>
        </div>
    </section>


    <!-- contact-section -->
    <section class="contact-section p_relative pt_120 pb_120">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title p_relative d_block mb_40">
                            <span class="p_relative d_block fs_14 lh_20 fw_sbold theme-color mb_7">Comment pouvons-nous vous
                                aider ?</span>
                            <h2 class="p_relative d_block lh_55 fw_exbold">Ecrivez un message</h2>
                        </div>
                        <div class="form-inner">

                            @if (session()->has('error_contact'))
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 ">
                                        <p class="alert alert-danger p-2">
                                            <i class="fa fa-exclamation-triangle">&nbsp;</i>

                                            {{ session()->get('error_contact') }}
                                        </p>

                                    </div>
                                </div>
                            @endif

                            @php
                                // dd(session()->has('message'));
                            @endphp
                            @if (session()->has('message_contact'))
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 ">
                                        <p class="alert alert-success p-2">
                                            <i class="fa fa-exclamation-circle">&nbsp;</i>

                                            {{ session()->get('message_contact') }}
                                        </p>

                                    </div>
                                </div>
                            @endif


                            <form method="post" action="{{ route('enregistrerContactMessage') }}" id="contact-form"
                                class="default-form">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                        <input type="text" name="contact_name" placeholder="Nom et Prénom"
                                            value="{{ old('contact_name') }}"
                                            class="@error('contact_name') is-invalid @enderror">

                                        @error('contact_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 form-group mb_20">
                                        <input type="email" name="contact_email" placeholder="Votre adresse mail"
                                            class="@error('contact_email') is-invalid @enderror"
                                            value="{{ old('contact_email') }}">
                                        @error('contact_email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group mb_20">
                                        <textarea name="contact_message" placeholder="Rédiger le message"
                                            class="@error('contact_message') is-invalid @enderror">{{ old('contact_message') }}</textarea>
                                        @error('contact_message')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn mr-0">
                                        <button class="theme-btn btn-one" type="submit" name="submit-form"><span>Envoyer le
                                                message</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 info-column">
                    <div class="info-inner p_relative d_block b_radius_10">
                        <div class="support-box p_relative d_block theme-color-bg pl_100 pt_40 pr_30 pb_40">
                            <div class="icon-box p_absolute l_50 t_50 fs_35 color-white"><i class="flaticon-phone-call"></i>
                            </div>
                            <span class="d_block fs_14 lh_20 fw_medium color-white">Appelez-nous maintenant</span>
                            <h5 class="d_block fs_18 lh_30 fw_medium color-white"><a href="tel:+22951874777"
                                    class="d_iblock color-white">+22951874777</a></h5>
                        </div>
                        <div class="inner p_relative d_block pt_45 pr_30 pb_50 pl_50">
                            <ul class="info-list clearfix p_relative d_block mb_30">
                                <li><a href="mailto:info@groupeenvol.org">info@groupeenvol.org</a></li>
                                <li>
                                    <address>
                                        Ilot 27897, A Bis <br>
                                        Abomey Calavi, République du Bénin <br>
                                    </address>
                                </li>
                            </ul>
                            <ul class="social-links clearfix">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


    <!-- google-map-section -->
    <section class="google-map-section p_relative">
        <div class="map-inner">
            <div class="google-map" id="contact-google-map" data-map-lat="40.712776" data-map-lng="-74.005974"
                data-icon-path="assets/images/icons/map-marker.png" data-map-title="Brooklyn, New York, United Kingdom"
                data-map-zoom="12"
                data-markers='{
                        "marker-1": [40.712776, -74.005974, "<h4>Branch Office</h4><p>77/99 New York</p>","assets/images/icons/map-marker.png"]
                    }'>

            </div>
        </div>
    </section>
    <!-- google-map-section -->


@endsection
