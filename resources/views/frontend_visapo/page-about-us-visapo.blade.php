@extends('index-visapo')

@section('title', 'Groupe Envol Sarl --A propos de nous')


@section('content')
    <div class="site-breadcrumb" style="background: url({{ asset('storage/assets_visapo/img/breadcrumb/breadcrumb.jpg') }})">
        <div class="container">
            <h2 class="breadcrumb-title">A propos de Groupe Envol Sarl</h2>
            <ul class="breadcrumb-menu">
                <li><a href="{{ route('accueil') }}"><i class="far fa-home"></i> Accueil</a></li>
                <li class="active">A propos de Groupe Envol Sarl</li>
            </ul>
        </div>
    </div>

   <div class="row mt-3">

    @include('frontend_visapo.partials.section-about-visapo')

    @include('frontend_visapo.partials.section-count-visapo')
    @include('frontend_visapo.partials.section-skills-visapo')

    @include('frontend_visapo.partials.section-testimonials-visapo')

    @include('frontend_visapo.partials.section-teams-visapo')

    @include('frontend_visapo.partials.section-partenaires-visapo')
   </div>
@endsection
