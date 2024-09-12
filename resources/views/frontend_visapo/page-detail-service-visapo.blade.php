@extends('index-visapo')

@section('title', "Details d'un service")


@section('content')
    <div class="site-breadcrumb" style="background: url({{ asset('storage/assets_visapo/img/breadcrumb/breadcrumb.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">Détails sur : {{ $service_affiche->nom_service }}</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route("accueil") }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="active">Détail service</li>
            </ul>
        </div>
    </div>

    <div class="service-single-area py-120">
        <div class="container">
            <div class="service-single-wrapper">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="service-sidebar">
                            <div class="widget category">
                                <h4 class="widget-title">Nos différentes prestations</h4>
                                <div class="category-list">
                                    @forelse ($all_services as $service)
                                        
                                    <a href="{{ route("afficherDetailService",["service_id"=>$service->id,"slug"=>$service->url_name]) }}" class="{{ $service->url_name == request()->segment(2)?"active":"" }}"><i class="far fa-angle-double-right"></i>{{ $service->nom_court_service }}</a>
                                    @empty
                                        
                                    @endforelse
                                    
                                </div>
                            </div>
                            <div class="widget service-download">
                                <h4 class="widget-title">Etapes</h4>
                                <a href="#"><i class="far fa-file-pdf"></i> Politique de confidentialité</a>
                                <a href="#"><i class="far fa-file-alt"></i> Termes of service</a>
                            </div>
                            {{-- <div class="service-quote">
                                <div class="quote-content">
                                    <h1 class="mb-10">
                                        Get Free Consultation
                                    </h1>
                                    <div class="quote-form">
                                        <form action="#">
                                            <div class="row">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Your Name">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Your Email">
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-select">
                                                        <option value="0">Select Visa</option>
                                                        <option value="1">Business Visa</option>
                                                        <option value="2">Student Visa</option>
                                                        <option value="3">Tourist Visa</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select class="form-select">
                                                        <option value="0">Select Country</option>
                                                        <option value="1">Australia</option>
                                                        <option value="2">Canada</option>
                                                        <option value="3">United States</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" cols="30" rows="4" placeholder="Your Message"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="theme-btn">Get Quote <i
                                                            class="far fa-arrow-right"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8">
                        <div class="service-details">
                            <div class="service-details-img mb-30">
                                <img src="{{ asset("storage/assets/services/".$service_affiche->image) }}" alt="thumb">
                            </div>
                            <div class="service-details">
                                <h3 class="mb-30">{{ $service_affiche->nom_service }}</h3>
                                <p class="mb-20">
                                    {{ $service_affiche->courte_description }}
                                </p>
                                <div class="row">

                                    <h3 class="p-3">Comment s'inscrire pour ce service ?</h3>
                                    <div class="col-md-4">
                                        <div class="service-single-item">
                                            <i class="flaticon-education"></i>
                                            <h6 class="">Remplir le formulaire d'inscription</h6>
                                            <p>
                                                Cliquer sur le lien suivant pour s'inscrire : <a href="{{ route("inscription") }}">Lien d'inscription</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="service-single-item">
                                            <i class="flaticon-education-1"></i>
                                            <h6>Préparez vos documents</h6>
                                            <p>
                                                <ul class="service-single-list">
                                                    <li>Votre pièce d'identité</li>
                                                    <li>Votre Diplôme le plus élevé</li>
                                                    <li>Votre relevé de notes le plus élevé (optionnel)</li>
                                                </ul>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="service-single-item">
                                            <i class="flaticon-technology"></i>
                                            <h6>Suivi de votre dossier</h6>
                                            <p>Après inscription, vous avez un code qui permet de suivre l'état de votre demande sur la plateforme.</p>
                                        </div>
                                    </div>
                                </div>
                                <p class="mb-20">
                                    {{ $service_affiche->description }}
                                </p>
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset("storage/assets_visapo/img/service/01.jpg")}}" alt>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset("storage/assets_visapo/img/service/02.jpg")}}" alt>
                                    </div>
                                </div>
                                <p class="mb-20">
                                    
                                    Les frais d'inscription pour ce service s'élèvent  à : <strong class="text-danger">{{ $service_affiche->frais_inscription." ".$service_affiche->devise }} </strong>
                                </p>
                                {{-- <div class="my-4">
                                    <div class="mb-3">
                                        <h3 class="mb-3">Business Visa Benefits</h3>
                                        <p>Aliquam facilisis rhoncus nunc, non vestibulum mauris volutpat non.
                                            Vivamus tincidunt accumsan urna, vel aliquet nunc commodo tristique.
                                            Nulla facilisi. Phasellus vel ex nulla. Nunc tristique sapien id mauris
                                            efficitur, porta scelerisque nisl dignissim. Vestibulum ante ipsum
                                            primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed at
                                            mollis tellus. Proin consequat, orci nec bibendum viverra, ante orci
                                            suscipit dolor, et condimentum felis dolor ac lectus.</p>
                                    </div>
                                    <ul class="service-single-list">
                                        <li><i class="far fa-check"></i>Fusce justo risus placerat in risus eget
                                            tincidunt consequat elit.</li>
                                        <li><i class="far fa-check"></i>Nunc fermentum sem sit amet dolor laoreet
                                            placerat.</li>
                                        <li><i class="far fa-check"></i>Nullam rhoncus dictum diam quis ultrices.
                                        </li>
                                        <li><i class="far fa-check"></i>Integer quis lorem est uspendisse eu augue
                                            porta ullamcorper dictum.</li>
                                        <li><i class="far fa-check"></i>Quisque tristique neque arcu ut venenatis
                                            felis malesuada et.</li>
                                    </ul>
                                </div> --}}
                                <div class="my-4">
                                    <h3 class="mb-3">Pourquoi nos préférer ?</h3>
                                    <p>
                                        Nous sommes fidèles à nos engagements. Nous avons déjà fait nos preuves.
                                    </p>

                                  <div class="mt-4 text-center">
                                    <a href="{{ route("inscription") }}" class="btn btn-danger btn-lg">
                                        <i class="fa fa-envelope">&nbsp;</i>

                                        Cliquer ici pour vous inscrire
                                    </a>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
