@extends('index-new')

@section('title', 'Groupe Envol --Souscription aux services')

@section('css')
    <link rel="stylesheet" href="{{ asset('storage/assets/css/style_stepper.css') }}" />

<style>

  .toggle.android {
    border-radius: 0px;
  }
   .toggle.android .toggle-handle {
    border-radius: 0px;
  }
 
</style>
@endsection

@section('js')
    <script src="{{ asset('storage/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/jspdf/jspdf.umd.js') }}"></script>
@endsection

@section('content')
    <section class="contact-section p_relative pt_25 pb_20">
        <div class="auto-container">

            <div class="content-box p_relative d_block z_5">
                <h2 class="color-logo d_block fs_50 fw_exbold centred">Vous êtes sur le point de vous inscrire sur notre plateforme  </h1>
                <h3 class="p_relative d_iblock fw_normal fs_24 lh_30 color-black pb_3 mb_25 mt_10 centred lh_10"> Veuillez prendre le temps de lire la note d'information ci-dessous et de donner votre consentement avant d'entrer une donnée personnelle vous concernant dans notre formulaire. </h3>
            </div> 


            <div class="row">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="note-information-tab" data-bs-toggle="tab" data-bs-target="#note-information" type="button" role="tab" aria-controls="note-information" aria-selected="true">Note d'information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="consentement-tab" data-bs-toggle="tab" data-bs-target="#consentement" type="button" role="tab" aria-controls="consentement" aria-selected="false">Signature du Consentement</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="information-detaillee-tab" data-bs-toggle="tab" data-bs-target="#information-detaillee" type="button" role="tab" aria-controls="information-detaillee" aria-selected="false">Information détaillée</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="information-service-tab" data-bs-toggle="tab" data-bs-target="#information-service" type="button" role="tab" aria-controls="information-service" aria-selected="false">Informations sur le service</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="note-information" role="tabpanel" aria-labelledby="note-information-tab">
                       @include('frontend.note-information')
                    </div>
                    <div class="tab-pane fade" id="consentement" role="tabpanel" aria-labelledby="consentement-tab">
                        @include('frontend.consentement')
                    </div>
                    <div class="tab-pane fade" id="information-detaillee" role="tabpanel" aria-labelledby="information-detaillee-tab">
                        @include('frontend.information-detaillee')
                    </div>
                    <div class="tab-pane fade" id="information-service" role="tabpanel" aria-labelledby="information-service-tab">
                        @include('frontend.information-service')
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
