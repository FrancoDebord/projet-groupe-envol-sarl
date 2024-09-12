@extends('index-visapo')

@section('title', 'Groupe Envol --Souscription aux services')

@section('css_vendor')
    <link rel="stylesheet" href="{{ asset('storage/assets/intl-telinput/css/intlTelInput.min.css') }}" />
    <link rel="stylesheet" href="{{ asset("storage/assets/datetimepicker/css/gijgo.min.css") }}"/>

<link rel="stylesheet" href="{{ asset("storage/assets/bootstrap-select/css/bootstrap-select.min.css") }}">
<link rel="stylesheet" href="{{ asset("storage/assets/bootstrap-toggle/css/bootstrap5-toggle.min.css") }}">


    <style>
        .toggle.android {
            border-radius: 0px;
        }

        .toggle.android .toggle-handle {
            border-radius: 0px;
        }
    </style>
@endsection

@section('js_vendor')
    {{-- <script src="https://cdn.kkiapay.me/k.js"> --}}

    <script src="{{ asset('storage/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('storage/assets/intl-telinput/js/intlTelInput.min.js') }}"></script>
    <script src="{{ asset("storage/assets/datetimepicker/js/gijgo.min.js") }}"></script>
    <script src="{{ asset("storage/assets/datetimepicker/js/messages/messages.fr-fr.min.js") }}"></script>

    <script src="{{ asset("storage/assets/bootstrap-select/js/bootstrap-select.js") }}"></script>
    <script src="{{ asset('storage/assets/bootstrap-toggle/js/bootstrap5-toggle.jquery.min.js') }}"></script>


@endsection

@section('content')

<div class="site-breadcrumb" style="background: url({{ asset("storage/assets_visapo/img/breadcrumb/breadcrumb.jpg") }})">
    <div class="container">
        <h2 class="breadcrumb-title">Inscription à un service</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ route("accueil") }}"><i class="far fa-home"></i> Accueil</a></li>
            <li class="active">Inscription à un service</li>
        </ul>
    </div>
</div>

<div class="service-single-area " style="padding: 50px 0;">
    <div class="container">
        <div class="service-single-wrapper">

            <div class="row p-3">
                <h2 class="text-center" style="color : #e94f36">Vous êtes sur le point de vous inscrire sur notre
                    plateforme </h1>
                    <p class="alert alert-light mt-3 fs-5 ">
                        Veuillez prendre le temps de lire la note d'information ci-dessous et de donner votre consentement
                        avant d'entrer une donnée personnelle vous concernant dans notre formulaire. </p>
            </div>

            <div class="row mt-3">
                <div class="col-10 offset-1">
                    @if (session()->has('message_succes'))
                        <p class="alert  text-center alert-success">{{ session()->get('message_succes') }}</p>
                    @endif

                    @if (session()->has('message_error'))
                        <p class="alert  text-center alert-danger">{{ session()->get('message_error') }}</p>
                    @endif
                    <p class="alert  text-center " id="zone_message"></p>


                    @if ($errors->any())
                        <ul class="alert alert-danger">

                            {!! implode('', $errors->all('<li>:message</li>')) !!}
                        </ul>
                    @endif
                </div>

            </div>

            @php
                $tab = 'note-information-tab';

                if (request('tab')) {
                    $tab = request('tab');
                } elseif (session()->has('tab_en_cours')) {
                    $tab = session()->get('tab_en_cours');
                }

            @endphp
            <div class="row p-2">
                <ul class="nav nav-tabs col-12 " id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $tab == '' || $tab == 'note-information-tab' ? 'active' : '' }}"
                            id="note-information-tab" data-bs-toggle="tab" data-bs-target="#note-information" type="button"
                            role="tab" aria-controls="note-information" aria-selected="true">Note d'information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $tab == 'consentement-tab' ? 'active' : '' }}" id="consentement-tab"
                            data-bs-toggle="tab" data-bs-target="#consentement" type="button" role="tab"
                            aria-controls="consentement" aria-selected="false">Signature du Consentement</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $tab == 'information-detaillee-tab' ? 'active' : '' }}"
                            id="information-detaillee-tab" data-bs-toggle="tab" data-bs-target="#information-detaillee"
                            type="button" role="tab" aria-controls="information-detaillee"
                            aria-selected="false">Information détaillée</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $tab == 'information-service-tab' ? 'active' : '' }}"
                            id="information-service-tab" data-bs-toggle="tab" data-bs-target="#information-service"
                            type="button" role="tab" aria-controls="information-service"
                            aria-selected="false">Informations sur le service</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link {{ $tab == 'paiement-tab' ? 'active' : '' }}" id="paiement-tab"
                            data-bs-toggle="tab" data-bs-target="#paiement" type="button" role="tab"
                            aria-controls="paiement" aria-selected="false">Procéder au paiement</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade {{ $tab == '' || $tab == 'note-information-tab' ? ' show active' : '' }}"
                        id="note-information" role="tabpanel" aria-labelledby="note-information-tab">
                        @include('frontend_visapo.note-information-visapo')
                    </div>
                    <div class="tab-pane fade {{ $tab == 'consentement-tab' ? ' show active' : '' }}" id="consentement"
                        role="tabpanel" aria-labelledby="consentement-tab">
                        @include('frontend_visapo.consentement-visapo')
                    </div>
                    <div class="tab-pane fade {{ $tab == 'information-detaillee-tab' ? 'show active ' : '' }}"
                        id="information-detaillee" role="tabpanel" aria-labelledby="information-detaillee-tab">
                        @include('frontend_visapo.information-detaillee-visapo')
                    </div>
                    <div class="tab-pane fade {{ $tab == 'information-service-tab' ? 'show active' : '' }}"
                        id="information-service" role="tabpanel" aria-labelledby="information-service-tab">
                        @include('frontend_visapo.information-service-visapo')
                    </div>
                    <div class="tab-pane fade {{ $tab == 'paiement-tab' ? 'show active' : '' }}" id="paiement"
                        role="tabpanel" aria-labelledby="paiement-tab">
                        @include('frontend_visapo.paiement-visapo')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection
