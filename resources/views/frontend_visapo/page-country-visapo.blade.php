@extends('index-visapo')

@section('title',"Groupe Envol Sarl -- Liste des pays")
    

@section('content')
<div class="site-breadcrumb" style="background: url({{ asset("storage/assets_visapo/img/breadcrumb/breadcrumb.jpg") }})">
    <div class="container">
        <h2 class="breadcrumb-title">Nos pays de destination</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ route("accueil") }}"><i class="far fa-home"></i> Accueil</a></li>
            <li class="active">Nos pays de destination</li>
        </ul>
    </div>
</div>


<div class="country-area py-120">
    <div class="container">
        <div class="row">
            @forelse ($all_pays_destination as $pays_destination)
            <div class="col-md-6 col-lg-4">

                <div class="country-item">
                    <div class="country-img">
                        <img src="{{ asset("storage/assets_visapo/img/country/".$pays_destination->image_couverture1)}}" alt>
                    </div>
                    <div class="country-flag">
                        <img src="{{ asset("storage/assets_visapo/img/country/".$pays_destination->icon_image_pays)}}" alt>
                    </div>
                    <div class="country-content">
                        <h4><a href="{{ route("pageDetailPaysDestination",["id"=>$pays_destination->id,"slug"=>Str::slug($pays_destination->nom_pays)]) }}">{{ $pays_destination->nom_pays }}</a></h4>
                        <p>{{ Str::limit($pays_destination->breve_description, 100, '...') }}</p>
                        <a href="{{ route("pageDetailPaysDestination",["id"=>$pays_destination->id,"slug"=>Str::slug($pays_destination->nom_pays)]) }}" class="country-read-btn">En Savoir plus <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
          
            {{-- <div class="col-md-6 col-lg-4">
                <div class="country-item">
                    <div class="country-img">
                        <img src="{{ asset("storage/assets_visapo/img/country/02.jpg")}}" alt>
                    </div>
                    <div class="country-flag">
                        <img src="{{ asset("storage/assets_visapo/img/country/france.jpg")}}" alt>
                    </div>
                    <div class="country-content">
                        <h4><a href="#">France</a></h4>
                        <p>There are many variations of passages but the majority have suffered alteration in
                            some form by injected humour or randomised words.</p>
                        <a href="#" class="country-read-btn">Read More <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="country-item">
                    <div class="country-img">
                        <img src="{{ asset("storage/assets_visapo/img/country/03.jpg")}}" alt>
                    </div>
                    <div class="country-flag">
                        <img src="{{ asset("storage/assets_visapo/img/country/uk.jpg")}}" alt>
                    </div>
                    <div class="country-content">
                        <h4><a href="#">Royaume Uni</a></h4>
                        <p>There are many variations of passages but the majority have suffered alteration in
                            some form by injected humour or randomised words.</p>
                        <a href="#" class="country-read-btn">Read More <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="country-item">
                    <div class="country-img">
                        <img src="{{ asset("storage/assets_visapo/img/country/04.jpg")}}" alt>
                    </div>
                    <div class="country-flag">
                        <img src="{{ asset("storage/assets_visapo/img/country/canada.jpg")}}" alt>
                    </div>
                    <div class="country-content">
                        <h4><a href="#">Canada</a></h4>
                        <p>There are many variations of passages but the majority have suffered alteration in
                            some form by injected humour or randomised words.</p>
                        <a href="#" class="country-read-btn">Read More <i
                                class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div> --}}
         
        </div>
    </div>
</div>

@endsection

  