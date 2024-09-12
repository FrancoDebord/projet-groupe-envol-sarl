<div class="service-area bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Nos différents services</span>
                    <h2 class="site-title">Ce que Nous <span>offrons</span></h2>
                </div>
            </div>
        </div>
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


            {{-- <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-img">
                        <img src="assets/img/service/01.jpg" alt>
                    </div>
                    <div class="service-icon">
                        <i class="flaticon-technology"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="service-title">
                            <a href="#">Business Visa</a>
                        </h4>
                        <p class="service-text">
                            There are many variations of passages available but the majority have suffered to
                            the alteration in some form by injected.
                        </p>
                        <div class="service-arrow">
                            <a href="#" class="service-read-btn">Learn More<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-img">
                        <img src="assets/img/service/02.jpg" alt>
                    </div>
                    <div class="service-icon">
                        <i class="flaticon-people-1"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="service-title">
                            <a href="#">Student Visa</a>
                        </h4>
                        <p class="service-text">
                            There are many variations of passages available but the majority have suffered to
                            the alteration in some form by injected.
                        </p>
                        <div class="service-arrow">
                            <a href="#" class="service-read-btn">Learn More<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-img">
                        <img src="assets/img/service/03.jpg" alt>
                    </div>
                    <div class="service-icon">
                        <i class="flaticon-electronics"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="service-title">
                            <a href="#">Job Seeker Visa</a>
                        </h4>
                        <p class="service-text">
                            There are many variations of passages available but the majority have suffered to
                            the alteration in some form by injected.
                        </p>
                        <div class="service-arrow">
                            <a href="#" class="service-read-btn">Learn More<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-img">
                        <img src="assets/img/service/04.jpg" alt>
                    </div>
                    <div class="service-icon">
                        <i class="flaticon-profession"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="service-title">
                            <a href="#">Tourist Visa</a>
                        </h4>
                        <p class="service-text">
                            There are many variations of passages available but the majority have suffered to
                            the alteration in some form by injected.
                        </p>
                        <div class="service-arrow">
                            <a href="#" class="service-read-btn">Learn More<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-img">
                        <img src="assets/img/service/05.jpg" alt>
                    </div>
                    <div class="service-icon">
                        <i class="flaticon-house"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="service-title">
                            <a href="#">Migrate Visa</a>
                        </h4>
                        <p class="service-text">
                            There are many variations of passages available but the majority have suffered to
                            the alteration in some form by injected.
                        </p>
                        <div class="service-arrow">
                            <a href="#" class="service-read-btn">Learn More<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="service-item">
                    <div class="service-img">
                        <img src="assets/img/service/06.jpg" alt>
                    </div>
                    <div class="service-icon">
                        <i class="flaticon-people-4"></i>
                    </div>
                    <div class="service-content">
                        <h4 class="service-title">
                            <a href="#">Transit Visa</a>
                        </h4>
                        <p class="service-text">
                            There are many variations of passages available but the majority have suffered to
                            the alteration in some form by injected.
                        </p>
                        <div class="service-arrow">
                            <a href="#" class="service-read-btn">Learn More<i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>