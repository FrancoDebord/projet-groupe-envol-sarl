@extends('index-visapo')

@section('title',"Groupe Envol Sarl --Créer compte")

@section('content')
<div class="site-breadcrumb" style="background: url({{ asset("storage/assets_visapo/img/breadcrumb/breadcrumb.jpg") }})">
    <div class="container">
        <h2 class="breadcrumb-title">Créer un compte</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ route("accueil") }}"><i class="far fa-home"></i> Accueil</a></li>
            <li class="active">Créer un compte</li>
        </ul>
    </div>
</div>

<div class="login-area py-120">
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="login-form">
                <div class="login-header">
                    <h3>Créer un compte</h3>
                    <p>Si vous êtes un particulier, ne créez pas de compte ici. Veuillez plutôt remplir le <a href="{{ route("afficherPageContact") }}">  formulaire de contact</a> </p>
                </div>
                <form action="{{ route("register") }}" method="POST">

                    @csrf
                    <div class="form-group">
                        <label>Votre nom complet</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}"  autocomplete="name" autofocus placeholder="Nom et prénom">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label>Votre adresse mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}"  autocomplete="email"  placeholder="Votre adresse mail">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Votre mot de passe">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group">
                        <label>Confirmer Mot de passe</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation" placeholder="Confirmer votre mot de passe">

                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="form-check form-group">
                        <input class="form-check-input" type="checkbox" value id="agree">
                        <label class="form-check-label" for="agree">
                            I agree with the <a href="#">Terms Of Service.</a>
                        </label>
                    </div>
                    <div class="d-flex align-items-center">
                        <button type="submit" class="theme-btn">Créer le compte <i
                                class="far fa-paper-plane"></i></button>
                    </div>
                </form>
                <div class="login-footer">
                    <p>Vous avez déjà un compte ? <a href="{{ route("login") }}">Connectez-vous plutôt</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
        

