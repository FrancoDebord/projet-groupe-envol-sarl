@extends('index-new')

@section('title', 'Groupe Envol --Souscription aux services')

@section('css')
    <link rel="stylesheet" href="{{ asset('storage/assets/css/style_stepper.css') }}" />
@endsection

@section('js')
    <script src="{{ asset('storage/assets/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('storage/assets/js/javascript_stepper.js') }}"></script>
@endsection

@section('content')
    <section class="contact-section p_relative pt_25 pb_20">
        <div class="auto-container">

            <div class="content-box p_relative d_block z_5">
                <h2 class="color-logo d_block fs_50 fw_exbold centred">Vous êtes sur le point de vous inscrire sur notre plateforme  </h1>
                <h3 class="p_relative d_iblock fw_normal fs_24 lh_30 color-black pb_3 mb_25 mt_10 centred lh_10"> Veuillez prendre le temps de lire la note d'information ci-dessous et de donner votre consentement avant d'entrer une donnée personnelle vous concernant dans notre formulaire. </h3>
            </div> 

            <!-- MultiStep Form -->
            <div class="row clearfix">
                <div class="col-12 content-column">

                    <div class="content-box">

                        <form id="msform">
                            <!-- progressbar -->
                            <ul id="progressbar">
                                <li class="active">Lecture de l'information</li>
                                <li>Signature Consentement</li>
                                <li>Remplir le formulaire</li>
                            </ul>
                            <fieldset>
                                <h2 class="fs-title">Personal Details</h2>
                                <h3 class="fs-subtitle">Tell us something more about you</h3>
                                <input type="text" name="fname" placeholder="First Name" />
                                <input type="text" name="lname" placeholder="Last Name" />
                                <input type="text" name="phone" placeholder="Phone" />
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <h2 class="fs-title">Social Profiles</h2>
                                <h3 class="fs-subtitle">Your presence on the social network</h3>
                                <input type="text" name="twitter" placeholder="Twitter" />
                                <input type="text" name="facebook" placeholder="Facebook" />
                                <input type="text" name="gplus" placeholder="Google Plus" />
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                                <input type="button" name="next" class="next action-button" value="Next" />
                            </fieldset>
                            <fieldset>
                                <h2 class="fs-title">Create your account</h2>
                                <h3 class="fs-subtitle">Fill in your credentials</h3>
                                <input type="text" name="email" placeholder="Email" />
                                <input type="password" name="pass" placeholder="Password" />
                                <input type="password" name="cpass" placeholder="Confirm Password" />
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                                <input type="submit" name="submit" class="submit action-button" value="Submit" />
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.MultiStep Form -->
        </div>
    </section>
@endsection
