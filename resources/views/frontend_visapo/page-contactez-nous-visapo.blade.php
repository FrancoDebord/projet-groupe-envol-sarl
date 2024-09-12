@extends('index-visapo')

@section('title', 'Groupe Envol Sarl --Contactez-nous')


@section('content')
<div class="site-breadcrumb" style="background: url({{ asset('storage/assets_visapo/img/breadcrumb/breadcrumb.jpg') }})">
    <div class="container">
        <h2 class="breadcrumb-title">Contactez-nous</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ route('accueil') }}"><i class="far fa-home"></i> Accueil</a></li>
            <li class="active">Contactez-nous</li>
        </ul>
    </div>
</div>


<div class="contact-area py-120">
    <div class="container">
        <div class="contact-wrapper">
            <div class="row">
                <div class="col-md-8 align-self-center">
                    <div class="contact-form">
                        <div class="contact-form-header">
                            <h2>Contactez-nous </h2>
                            <p>Posez-nous toutes vos questions et nous vous répondrons au plus tôt.</p>
                        </div>

                        @if (session()->has('error_contact'))
                        <div class="row mt-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 ">
                                <p class="alert alert-danger p-2">
                                    <i class="fa fa-exclamation-triangle">&nbsp;</i>

                                    {{ session()->get('error_contact') }}
                                </p>

                            </div>
                        </div>
                    @endif

                   
                    @if (session()->has('message_contact'))
                        <div class="row mt-3">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-10 offset-lg-1 ">
                                <p class="alert alert-success p-2">
                                    <i class="fa fa-exclamation-circle">&nbsp;</i>

                                    {{ session()->get('message_contact') }}
                                </p>

                            </div>
                        </div>
                    @endif

                        <form method="post" action="{{ route("enregistrerContactMessage") }}"
                            id="contact-form">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" value="{{ old('contact_name') }}"
                                        class=" form-control @error('contact_name') is-invalid @enderror" name="contact_name"
                                            placeholder="Votre nom complet" >

                                            @error('contact_name')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control @error('contact_email') is-invalid @enderror" name="contact_email"
                                            placeholder="Votre mail" value="{{ old("contact_email") }}" >

                                            @error('contact_email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">

                                <input type="text" class="form-control  @error('contact_subject') is-invalid @enderror" value="{{ old("contact_subject") }}" name="contact_subject" placeholder="Your Subject"
                                    >
                                    @error('contact_subject')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea name="contact_message" cols="30" rows="5" class="form-control @error('contact_message') is-invalid @enderror" placeholder="Ecrivez votre message">{{ old("contact_message") }}</textarea>

                                @error('contact_message')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                            </div>
                            <button type="submit" class="theme-btn">Envoyer le message <i class="far fa-paper-plane"></i></button>
                            <div class="col-md-12 mt-3">
                                <div class="form-messege text-success"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-content">
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Adresse de notre bureau</h5>
                                <p>
                                    <address>
                                        Ilot 27897, A Bis <br>
                                        Abomey Calavi, République du Bénin <br>
                                    </address>
                                </p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-phone"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Appelez-nous</h5>
                                <p>
                                    <a href="tel:+22951874777">+22951874777</a>
                                </p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-envelope"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Envoyez-nous un mail</h5>
                                <p><a href="mailto:info@groupeenvol.org" class="__cf_email__"
                                        data-cfemail="2b42454d446b4e534a465b474e05484446">info@groupeenvol.org</a>
                                </p>
                            </div>
                        </div>
                        <div class="contact-info">
                            <div class="contact-info-icon">
                                <i class="fal fa-clock"></i>
                            </div>
                            <div class="contact-info-content">
                                <h5>Nos horaires d'ouverture</h5>
                                <p>Lundi - Samedi (08:00 - 19:00)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-map">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7929.19285048351!2d2.3436609346745563!3d6.4458319440228875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1024a9a9fcecbe53%3A0x7c7a2e2d05a13fa2!2sEglise%20Sainte%20Jos%C3%A9phine%20Bakhita!5e0!3m2!1sfr!2sbj!4v1726149702823!5m2!1sfr!2sbj" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    {{-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96708.34194156103!2d-74.03927096447748!3d40.759040329405195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x4a01c8df6fb3cb8!2sSolomon%20R.%20Guggenheim%20Museum!5e0!3m2!1sen!2sbd!4v1619410634508!5m2!1sen!2s"
        style="border:0;" allowfullscreen loading="lazy"></iframe> --}}
</div>
@endsection
