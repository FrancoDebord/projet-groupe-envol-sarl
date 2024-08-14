@extends('index-new')

@section('title',"Groupe Envol Sarl -Notre Equipe")
    

@section('content')
    
        <!-- Page Title -->
        <section class="page-title p_relative"
            style="background-image: url({{ asset("storage/assets_vendor/images/background/page-title.jpg") }});">
            <div class="auto-container">
                <div class="content-box p_relative pt_170 pb_170">
                    <h1 class="d_block fs_40 lh_50 color_white fw_exbold color-white">Notre Equipe</h1>
                    <ul class="bread-crumb p_absolute r_0 b_0 d_iblock pl_30 pr_30 bg-white clearfix pt_4 pb_4">
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold pr_13 mr_5"><a
                                href="{{ route("accueil") }}" class="color_white hov-color">Accueil</a></li>
                        <li class="p_relative d_iblock fs_12 lh_25 color_white fw_sbold">Notre Equipe</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- team-page-section -->
        <section class="team-page-section p_relative pt_120 pb_120">
            <div class="auto-container">
                <div class="row clearfix">

                    @forelse ($all_teams_member as $team_member)
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one">
                            <div class="inner-box p_relative d_block centred mb_30">
                                <figure class="image-box p_relative d_block"><img src="{{ asset("storage/assets_vendor/images/team/".$team_member->photo_member) }}"
                                        alt=""></figure>
                                <div class="lower-content p_relative d_block pt_25">
                                    <h3 class="d_block fs_22 lh_30"><a href="{{ route("afficherPageTeamMemberDetail",["id"=>$team_member->id,"slug"=>Str::slug($team_member->titre_member." ".$team_member->nom_member." ".$team_member->prenom_member )]) }}"
                                            class="d_iblock black-color hov-color">{{ $team_member->titre_member." ".$team_member->nom_member." ".$team_member->prenom_member }}</a></h3>
                                    <span class="designation d_block fs_16 fw_medium">{{ $team_member->poste_member }}</span>
                                </div>
                                <div class="overlay-content bg-white b_shadow_6 z_1 pt_25 pb_30 pl_15 pr_15 tran_5">
                                    <h3 class="d_block fs_22 lh_30"><a href="{{ route("afficherPageTeamMemberDetail",["id"=>$team_member->id,"slug"=>Str::slug($team_member->titre_member." ".$team_member->nom_member." ".$team_member->prenom_member )]) }}"
                                            class="d_iblock black-color hov-color">{{ $team_member->titre_member." ".$team_member->nom_member." ".$team_member->prenom_member }}</a></h3>
                                    <span class="designation d_block fs_16 fw_medium mb_18">{{ $team_member->poste_member }}</span>
                                    <ul class="social-links clearfix">
                                        <li><a href="{{ $team_member->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $team_member->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{ $team_member->linkedin }}"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="{{ $team_member->youtube }}"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                        
                    @endforelse
                    
                    
                </div>
            </div>
        </section>
        <!-- team-page-section end -->


     
@endsection