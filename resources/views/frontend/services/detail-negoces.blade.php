@extends('frontend.services.layout-service-detail')

@section('title',"Detail sur les Négoces")
    

@section('page-title')
     <!-- Page Title -->
     <section class="page-title p_relative"
     style="background-image: url({{ asset('storage/assets_vendor/images/background/page-title.jpg') }});">
     <div class="auto-container">
         <div class="content-box p_relative pt_170 pb_170">
             <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Négoces</h1>
             <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                 <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a href="{{ route("accueil") }}"
                         class="color_white hov-color">Accueil</a></li>
                 <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">
                    <a href="{{ route("afficherPageService") }}">Nos Services</a>
                 </li>
             </ul>
         </div>
     </div>
 </section>
 <!-- End Page Title -->
@endsection

@section('sub_content')


<div class="service-details-content">
    <div class="content-style-one">
        <figure class="image-box"><img src="{{ asset("storage/assets/services/negoces.jpg")}}" alt=""></figure>
        <div class="group-title">
            <h2>Négoces</h2>
        </div>
        <div class="text">
            <h3>Nous menons des activités de négoces pour des structures même au niveau international.</h3>
            <p>
                Les activités de négoce, c'est quoi ? Il s'agit tout simplement du commerce. On se sert surtout du terme négoce pour désigner les affaires commerciales menées par divers acteurs de l'économie. Il est utilisé également pour parler des opérations d'un commerçant.</p>
        </div>
    </div>
    <div class="content-style-two">
        <div class="inner-box">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-document"></i></div>
                        <h4>Que faire <br />pour souscrire ?</h4>
                        <p>
                            {{-- Si vous voulez vous inscrire pour ce service, vous serez redirigé.e sur un formulaire où vous renseignerez toutes les informations requises. Notre équipe prendra ensuite contact avec vous pour faire aboutir votre dossier.  --}}
                            Le lien d'inscription est ici : <a href="{{ route("inscription") }}">Lien d'inscription</a>. Tous les détails pour votre inscription sont fournis sur la page d'inscription. 
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-file"></i></div>
                        <h4>Et Après <br />L'inscription ?</h4>
                        <p>Notre Equipe prend contact avec vous après avoir étudié votre dossier. Si d'informations complémentaires sont requises, vous serez amené.e à les fournir.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-travel-1"></i></div>
                        <h4>Comment  <br />suivre ?</h4>
                        <p>Après votre inscription, un code vous est donné pour vous permettre de suivre votre demande sur notre site.</p>
                    </div>
                </div>
            </div>
        </div>
        <h3>Plus amples détails sur ce service ?</h3>
        <div class="text">
            <p>Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>
    </div>
    {{-- <div class="two-column">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                <figure class="image-box"><img src="{{ asset("storage/assets_vendor/images/service/service-15.jpg")}}" alt=""></figure>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                <div class="content-box">
                    <h3>Our Visa Benefits</h3>
                    <ul class="list clearfix">
                        <li>Labore et dolore ipsum magna aliqua</li>
                        <li>Ut enim veniam, quis nostrud minim exerc</li>
                        <li>Itation ullamco laboris nisiut aliquip irure</li>
                        <li>Dolor in reprehenderit voluptate velit esse</li>
                        <li>Cillum dolore fugiat nulla excepteur</li>
                        <li>Sint occaecat cupidatat non proident</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text">
            <h3>How To Do Test Preparation</h3>
            <p>Nunc quam arcu, pretium quis quam sed, laoreet efficitur leo. Aliquam era volutpat lobortis sem consequat consequat imperdiet. In nulla sed viverraut loremut dapib estetur diam nunc bibendum imperdiets. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
        </div>
    </div> --}}
    {{-- <div class="accordion-content">
        <h3>Frequently asked Questions</h3>
        <ul class="accordion-box">
            <li class="accordion block active-block">
                <div class="acc-btn active">
                    <div class="icon-outer"></div>
                    <h5>How long does it take for a Student Visa to process?</h5>
                </div>
                <div class="acc-content current">
                    <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                </div>
            </li>
            <li class="accordion block">
                <div class="acc-btn">
                    <div class="icon-outer"></div>
                    <h5>What is the fee structure for visa submission?</h5>
                </div>
                <div class="acc-content">
                    <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                </div>
            </li>
            <li class="accordion block">
                 <div class="acc-btn">
                    <div class="icon-outer"></div>
                    <h5>What are the important things to know as a Student Visa applicant?</h5>
                </div>
                <div class="acc-content">
                    <p>Ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
                </div>
            </li>
        </ul>
    </div>
</div> --}}
@endsection