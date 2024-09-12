@extends('index-visapo')



@section('content')


@include('frontend_visapo.partials.slider-visapo')


@include('frontend_visapo.partials.section-feature-visapo')




@include('frontend_visapo.partials.section-services-visapo')


@include('frontend_visapo.partials.section-skills-visapo')


@include('frontend_visapo.partials.section-count-visapo')

@include('frontend_visapo.partials.section-coaching-visapo')

@include('frontend_visapo.partials.whychoose-us-visapo')


@include('frontend_visapo.partials.section-testimonials-visapo')


@include('frontend_visapo.partials.section-countries-visapo')


@include('frontend_visapo.partials.section-teams-visapo')

{{-- <div class="quote-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="quote-content">
                    <h1 class="mb-10">
                        Get Free Consultation
                    </h1>
                    <p>It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. </p>
                    <div class="quote-form">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-select">
                                            <option value="0">Select Visa</option>
                                            <option value="1">Business Visa</option>
                                            <option value="2">Student Visa</option>
                                            <option value="3">Tourist Visa</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-select">
                                            <option value="0">Select Country</option>
                                            <option value="1">Australia</option>
                                            <option value="2">Canada</option>
                                            <option value="3">United States</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <textarea class="form-control" cols="30" rows="4" placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="theme-btn">Get Quote <i
                                            class="far fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="blog-area pt-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Our Blog</span>
                    <h2 class="site-title">News & <span> Blog</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="assets/img/blog/01.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                                <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a>
                                </li>
                                <li><a href="#"><i class="far fa-calendar-alt"></i> March 12, 2024</a>
                                </li>
                            </ul>
                        </div>
                        <h4 class="blog-title">
                            <a href="#">There are many variates of passages alteration</a>
                        </h4>
                        <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque </p>
                        <a class="theme-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="assets/img/blog/02.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                                <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a>
                                </li>
                                <li><a href="#"><i class="far fa-calendar-alt"></i> March 12, 2024</a>
                                </li>
                            </ul>
                        </div>
                        <h4 class="blog-title">
                            <a href="#">There are many variates of passages alteration</a>
                        </h4>
                        <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque </p>
                        <a class="theme-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="blog-item">
                    <div class="blog-item-img">
                        <img src="assets/img/blog/03.jpg" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                                <li><a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a>
                                </li>
                                <li><a href="#"><i class="far fa-calendar-alt"></i> March 12, 2024</a>
                                </li>
                            </ul>
                        </div>
                        <h4 class="blog-title">
                            <a href="#">There are many variates of passages alteration</a>
                        </h4>
                        <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque </p>
                        <a class="theme-btn" href="#">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<div class="partner-area pt-70 pb-70">
    <div class="container">
        <div class="partner-wrapper partner-slider owl-carousel owl-theme">
            <img src="{{ asset("storage/assets_visapo/img/partner/01.jpg")}}" alt="thumb">
            <img src="{{ asset("storage/assets_visapo/img/partner/02.jpg")}}" alt="thumb">
            <img src="{{ asset("storage/assets_visapo/img/partner/03.jpg")}}" alt="thumb">
            <img src="{{ asset("storage/assets_visapo/img/partner/04.jpg")}}" alt="thumb">
            <img src="{{ asset("storage/assets_visapo/img/partner/01.jpg")}}" alt="thumb">
            <img src="{{ asset("storage/assets_visapo/img/partner/02.jpg")}}" alt="thumb">
            <img src="{{ asset("storage/assets_visapo/img/partner/03.jpg")}}" alt="thumb">
        </div>
    </div>
</div>
@endsection