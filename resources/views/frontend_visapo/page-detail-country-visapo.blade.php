@extends('index-visapo')

@section('title', 'Description du pays')

@section('content')
    <div class="site-breadcrumb" style="background: url({{ asset("storage/assets_visapo/img/country/".$pays_visualiser->icon_image_pays ) }})">
        <div class="container">
            <h2 class="breadcrumb-title">{{ $pays_visualiser->nom_pays }}</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route("accueil") }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="active">Description d'un pays</li>
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
                                <h4 class="widget-title">Tous les pays de destination</h4>
                                <div class="category-list">

                                    @forelse ($all_pays_destination as $pays_destination)
                                        
                                    <a href="{{ route("pageDetailPaysDestination",["id"=>$pays_destination->id,"slug"=>Str::slug($pays_destination->nom_pays)]) }}"><i class="far fa-angle-double-right"></i>
                                    {{ $pays_destination->nom_pays }}</a>
                                    @empty
                                        
                                    @endforelse
                                  
                                </div>
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
                                <img src="{{ asset("storage/assets_visapo/img/country/".$pays_visualiser->image_couverture1) }}" alt="thumb">
                            </div>
                            <div class="service-details">
                                <h3 class="mb-30">{{ $pays_visualiser->nom_pays }}</h3>
                                <p class="mb-20">
                                   {{ $pays_visualiser->breve_description }}
                                </p>
                               
                                <div class="row">
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset("storage/assets_visapo/img/country/".$pays_visualiser->image1)}}" alt>
                                    </div>
                                    <div class="col-md-6 mb-20">
                                        <img src="{{ asset("storage/assets_visapo/img/country/".$pays_visualiser->image2)}}" alt>
                                    </div>
                                </div>
                                <p class="mb-20">
                                    {{ $pays_visualiser->description }}
                                </p>
                                <div class="my-4">
                                    <div class="mb-3">
                                        <h3 class="mb-3">Les Bénéfices de : {{ $pays_visualiser->nom_pays }} </h3>
                                        <p>{{ $pays_visualiser->benefice }}</p>
                                    </div>
                                   
                                </div>
                                <div class="my-4">
                                    <h3 class="mb-3">Pourquoi choisir {{ $pays_visualiser->nom_pays }} ? </h3>
                                    <p>
                                        {{  $pays_visualiser->whychoose  }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
