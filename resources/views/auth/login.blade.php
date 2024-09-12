@extends('index-visapo')

@section('title',"Groupe Envol Sarl --Login")


@section('content')
<div class="site-breadcrumb" style="background: url({{ asset("storage/assets_visapo/img/breadcrumb/breadcrumb.jpg") }})">
    <div class="container">
        <h2 class="breadcrumb-title">Login</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ route("accueil") }}"><i class="far fa-home"></i> Accueil</a></li>
            <li class="active">Login</li>
        </ul>
    </div>
</div>


<div class="login-area py-120">
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="login-form">
                <div class="login-header">
                    <h3>Login</h3>
                    <p>Entrer vos informations de connexion</p>
                </div>
                <form action="{{ route("login") }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Adresse mail</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old("email") }}" placeholder="Votre adresse mail" required autocomplete="email" autofocus>

                        
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                    </div>
                    <div class="form-group">
                        <label>Mot de passe</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Votre mot de passe">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                    <div class="d-flex justify-content-between mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  id="remember" name="remember"  {{ old('remember') ? 'checked' : ''}}>
                            <label class="form-check-label" for="remember">
                                Se souvenir de moi
                            </label>
                        </div>
                        <a href="{{ route("password.request") }}" class="forgot-pass">Mot de passe oublié ?</a>
                    </div>
                    <div class="d-flex align-items-center">
                        <button type="submit" class="theme-btn">Se connecter <i
                                class="far fa-sign-in"></i></button>
                    </div>
                </form>
                <div class="login-footer">
                    <p>Vous n'avez pas de compte ? <a href="{{ route("register") }}">Créer un compte</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
        

