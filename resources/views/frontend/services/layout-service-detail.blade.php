@extends('index-new')


@section('css')
    <!-- Stylesheets -->
    <link href="{{ asset('storage/assets_vendor/css/service.css') }}" rel="stylesheet">
@endsection

@section('content')
   
@yield('page-title')


    <!-- service-details -->
    <div class="service-details">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="service-sidebar">
                        <div class="sidebar-widget sidebar-categories">
                            <ul class="categories-list clearfix">

                                @forelse ($all_services as $service)
                                    <li><a href="/our-services/{{ $service->url_service }}" class="{{ $service->url_service == request()->segment(2)?"active":"" }}">{{ $service->nom_service }}<i
                                                class="flaticon-right-arrow"></i></a></li>
                                @empty
                                @endforelse


                            </ul>
                        </div>
                        <div class="sidebar-widget sidebar-download">
                            <div class="widget-title">
                                <h4>Récentes inscriptions</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="download-list clearfix">

                                    @forelse ($dernieres_inscriptions_chaque_services as $service_souscrit)
                                    <li>
                                        <i class="fa fa-user-alt"></i>
                                        {{-- {{ $service_souscrit->serviceConcerne->url_service }} --}}
                                        <h4><a href="#">{{ Str::ucfirst($service_souscrit->service_souscrit) }}</a></h4>
                                        <span>Date Dernière Inscription : {{ date("d/m/Y",strtotime($service_souscrit->date_inscription)) }}</span>
                                    </li>
                                    @empty
                                        <li>
                                            Aucune inscription pour le moment.
                                        </li>
                                    @endforelse
                                   
                                  
                                </ul>
                            </div>
                        </div>
                        {{-- <div class="sidebar-widget sidebar-categories-2">
                            <div class="widget-title">
                                <h4>Education Coaching</h4>
                            </div>
                            <div class="widget-content">
                                <ul class="categories-list clearfix">
                                    <li><a href="coaching-details.html">Citizenship Test</a></li>
                                    <li><a href="coaching-details-2.html">TOEFL</a></li>
                                    <li><a href="coaching-details-3.html">Take IELTS</a></li>
                                    <li><a href="coaching-details-4.html">PTE Coaching</a></li>
                                    <li><a href="coaching-details-5.html">Management Test</a></li>
                                    <li><a href="coaching-details-6.html">Skills Exam</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-assessment">
                            <div class="widget-title">
                                <h4>Free Online Assessment</h4>
                            </div>
                            <div class="widget-content">
                                <form action="https://azim.commonsupport.com/Vistpro/service-details.html" method="post"
                                    class="assessment-form">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Full Name" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email address" required="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="phone" placeholder="Phone" required="">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="theme-btn btn-one"><i class="flaticon-send"></i>Send
                                            Message</button>
                                    </div>
                                </form>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">

                    @yield('sub_content')
                </div>
            </div>
        </div>
    </div>
    <!-- service-details end -->
@endsection
