@extends('index-visapo')

@section('title',"Groupe Envol Sarl --Réinitialiser le mot de passe")
    

@section('content')
<div class="site-breadcrumb" style="background: url({{ asset("storage/assets_visapo/img/breadcrumb/breadcrumb.jpg") }})">
    <div class="container">
        <h2 class="breadcrumb-title">Mot de passe oublié</h2>
        <ul class="breadcrumb-menu">
            <li><a href="{{ route("accueil") }}"><i class="far fa-home"></i> Accueil</a></li>
            <li class="active">Mot de passe oublié</li>
        </ul>
    </div>
</div>


<div class="login-area py-120">
    <div class="container">
        <div class="col-md-5 mx-auto">
            <div class="login-form">
                <div class="login-header">
                    <h3>Mot de passe oublié</h3>
                    <p>Réinitialiser le mot de passe</p>
                </div>
                <form action="{{ route("password.email") }}" method="POST">

                    @csrf
                    <div class="form-group">
                        <label>Votre adresse Mail</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Votre adresse Email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    </div>
                    <div class="d-flex align-items-center">
                        <button type="submit" class="theme-btn">Valider pour recevoir le lien<i class="far fa-key"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
        

    