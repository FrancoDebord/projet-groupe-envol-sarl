@extends('index-visapo')

@section('title',"Groupe Envol Sarl --Nos différentes prestations")
    
@section('content')
<div class="site-breadcrumb" style="background: url({{ asset("storage/assets_visapo/img/breadcrumb/breadcrumb.jpg") }})">
    <div class="container">
        <h2 class="breadcrumb-title">Nos différentes prestations</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ route("accueil") }}"><i class="far fa-home"></i> Accueil</a></li>
            <li class="active">Nos différentes prestations</li>
        </ul>
    </div>
</div>


<div class="service-area bg py-120">
    <div class="container">
        <div class="row">
            @forelse ($all_services as $service)
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset("storage/assets/services/".$service->image)}}" alt>
                    </div>
                    <div class="service-icon">
                        <i class="flaticon-technology"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="service-title">
                            <a href="{{ route("afficherDetailService",["service_id"=>$service->id,"slug"=>$service->url_name]) }}">{{ $service->nom_service }}</a>
                        </h4>
                        <p class="service-text">
                            {{ $service->courte_description }}
                        </p>
                        <div class="service-arrow">
                            <a href="{{ route("afficherDetailService",["service_id"=>$service->id,"slug"=>$service->url_name]) }}" class="service-read-btn">En savoir plus<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-12">
                    <p class="alert alert-info p-3 text-center">Aucun service enregistré pour le moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</div>

@endsection

   