<div class="team-area bg py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline">Notre Staff</span>
                    <h2 class="site-title">Rencontrez Nos <span>Experts</span></h2>
                </div>
            </div>
        </div>
        <div class="row">

            @forelse ($all_teams_member as $team_member)

            <div class="col-md-6 col-lg-4 col-xl-4">
                <div class="team-item">
                    <img src="{{ asset("storage/assets/team/".$team_member->photo_member)}}" alt="thumb">
                    <div class="team-social">
                        <a href="{{ $team_member->facebook }}"><i class="fab fa-facebook-f"></i></a>
                        <a href="{{ $team_member->twitter }}"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="{{ $team_member->linkedin }}"><i class="fab fa-linkedin"></i></a>
                        <a href="{{ $team_member->youtube }}"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="{{ route("afficherPageTeamMemberDetail",["id"=>$team_member->id,"slug"=>Str::slug($team_member->titre_member." ".$team_member->prenom_member." ".$team_member->nom_member)]) }}">{{ $team_member->titre_member." ".$team_member->prenom_member." ".$team_member->nom_member }}</a></h5>
                            <span>{{ $team_member->poste_member }}</span>
                        </div>
                        <a class="team-social-btn" href="#"><i class="far fa-share-alt"></i></a>
                    </div>
                </div>
            </div>
            @empty
                <div class="col-12 p-3">
                    <p class="alert alert-info">
                        Aucun membre de l'équipe n'a été ajouté pour le moment.
                    </p>
                </div>
            @endforelse
         
       
        </div>
    </div>
</div>
