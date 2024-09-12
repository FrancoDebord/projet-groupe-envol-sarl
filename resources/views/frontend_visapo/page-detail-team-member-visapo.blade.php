@extends('index-visapo')

@section('title', "Detail d'un staff")

@section('content')
    <div class="site-breadcrumb" style="background: url({{ asset("storage/assets/team/".$team_member_detail->photo_member) }})">
        <div class="container">
            <h2 class="breadcrumb-title">{{ $team_member_detail->titre_member." ".$team_member_detail->prenom_member." ".$team_member_detail->nom_member }}</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route("accueil") }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="active">Détail d'un staff</li>
            </ul>
        </div>
    </div>



    <div class="blog-single-area pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-single-wrapper">
                        <div class="blog-single-content">
                            <div class="blog-thumb-img">
                                <img src="{{ asset("storage/assets/team/".$team_member_detail->photo_member)}}" alt="thumb">
                            </div>
                            <div class="blog-info">
                                {{-- <div class="blog-meta">
                                    <div class="blog-meta-left">
                                        <ul>
                                            <li><i class="far fa-user"></i><a href="#">{{ $team_member_detail->titre_member." ".$team_member_detail->prenom_member." ".$team_member_detail->nom_member }}</a>
                                            </li>
                                            <li><i class="far fa-comments"></i>3.2k Comments</li>
                                            <li><i class="far fa-thumbs-up"></i>1.4k Like</li>
                                        </ul>
                                    </div>
                                    <div class="blog-meta-right">
                                        <a href="#" class="share-link"><i class="far fa-share-alt"></i>Share</a>
                                    </div>
                                </div> --}}
                                <div class="blog-details">
                                    <h3 class="blog-details-title mb-20">{{ $team_member_detail->titre_member." ".$team_member_detail->prenom_member." ".$team_member_detail->nom_member }}</h3>
                                    
                                    <h5 class="blog-details-title mb-20 text-warning">{{ $team_member_detail->poste_member }}</h5>

                                    <p class="mb-10">
                                      {{ $team_member_detail->bio_member }}
                                    </p>
                                  
                                  
                                   
                                </div>
                            </div>
                      
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">

                        {{-- <div class="widget search">
                            <h5 class="widget-title">Search</h5>
                            <form class="search-form">
                                <input type="text" class="form-control" placeholder="Search Here...">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div> --}}

                        <div class="widget social-share">
                            <h5 class="widget-title">Suivre ce staff</h5>
                            <div class="social-share-link">
                                <a href="{{ $team_member_detail->facebook }}"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $team_member_detail->twitter }}"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $team_member_detail->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                <a href="{{ $team_member_detail->youtube }}"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>

                        <div class="widget category">
                            <h5 class="widget-title">Nos différents services</h5>
                            <div class="category-list">

                                @forelse ($all_services as $service)
                                        
                                    <a href="{{ route("afficherDetailService",["service_id"=>$service->id,"slug"=>$service->url_name]) }}" class="{{ $service->url_name == request()->segment(2)?"active":"" }}"><i class="far fa-angle-double-right"></i>{{ $service->nom_court_service }}</a>
                                    @empty
                                        
                                    @endforelse
                               
                            </div>
                        </div>

                      

                      

                        
                    </aside>
                </div>
            </div>

            <div class="row ">
                <h3 class="text-warning pb-3 text-center">Les autres membres de notre staff</h3>
            </div>

        </div>
        @include('frontend_visapo.partials.section-teams-visapo')
    </div>
@endsection
