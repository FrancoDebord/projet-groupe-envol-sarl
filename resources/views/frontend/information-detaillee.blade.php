<div class="row">
    <div class="col-12 col-md-10 offset-md-1">
        <h2 class="text-center mt-4">Fournir vos informations détaillées dans ce formulaire</h2>

        <form action="">
            @csrf

            <div class="row">
                <div class="col-12 col-sm-6 p-2">
                    <div class="row mt-4 div_information_compte">
                        <h6 class="underline_title">Vous n'avez pas encore de compte, créez-en un !</h6>

                        <div class="col-12 form-group-sm mt-3">
                            <label for="email_client">Votre adresse email</label>
                            <input type="email" class="form-control @error("email_client") is-invalid @enderror" name="email_client" placeholder="example@email.com"/>
                        </div>
                        <div class="col-12 form-group-sm ">
                            <label for="nom_client">Votre Nom</label>
                            <input type="text" class="form-control @error("nom_client") is-invalid @enderror" name="nom_client" />
                        </div>
                        <div class="col-12 form-group-sm ">
                            <label for="prenom_client">Votre Prénom</label>
                            <input type="text" class="form-control @error("prenom_client") is-invalid @enderror" name="prenom_client"/>
                        </div>
                        <div class="col-12 form-group-sm ">
                            <label for="password_client">Définissez un mot de passe</label>
                            <input type="password" class="form-control @error("password_client") is-invalid @enderror" name="password_client"/>
                        </div>
                        <div class="col-12 form-group-sm ">
                            <label for="confirm_password_client">Confirmez le mot de passe</label>
                            <input type="password" class="form-control @error("confirm_password_client") is-invalid @enderror" name="confirm_password_client"/>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 p-2">
                    <div class="row mt-4 div_information_compte" >
                        <h6 class="underline_title">Vous avez déjà un compte ? Connectez-vous !</h6>

                        <div class="col-12 form-group-sm mt-3">
                            <label for="code_client_ou_email">Votre Code de client ou votre Email</label>
                            <input type="text" class="form-control @error("code_client_ou_email") is-invalid @enderror" name="code_client_ou_email" placeholder=""/>
                        </div>
                       
                        <div class="col-12 form-group-sm ">
                            <label for="password_connexion">Votre mot de passe</label>
                            <input type="password" class="form-control @error("password_connexion") is-invalid @enderror" name="password_connexion"/>
                        </div>

                        <div class="col-12 text-center mt-4">
                            <button type="button" class="btn btn-outline-danger">Se connecter</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <h6 class="underline_title">Informations sur votre origine</h6>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="avez_vous_un_passeport_valide">Avez vous un passeport valide ?</label>
                    <select name="avez_vous_un_passeport_valide" id="avez_vous_un_passeport_valide" class="from-control form-select show-tick @error("avez_vous_un_passeport_valide") is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="oui">Oui</option>
                        <option value="Non">Non</option>
                    </select>
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="pays_nationalite">Votre pays de nationalité</label>

                    <select name="pays_nationalite" id="pays_nationalite" class="from-control form-select show-tick @error("pays_nationalite") is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        @forelse ($list_pays as $pays)
                            <option value="{{ $pays->id }}">{{ $pays->pays_name }}</option>
                        @empty
                            
                        @endforelse
                    </select>
                   
                </div>


                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="votre_nom">Votre nom</label>
                    <input type="text" name="votre_nom" id="votre_nom" readonly class="form-control @error("votre_nom") is-invalid @enderror"/>
                   
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="votre_prenom">Votre prénom</label>
                    <input type="text" name="votre_prenom" id="votre_prenom" readonly class="form-control @error("votre_prenom") is-invalid @enderror"/>
                   
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="date_naissance">Votre date de naissance</label>
                    <input type="date" name="date_naissance" id="date_naissance" class="form-control @error("date_naissance") is-invalid @enderror"/>
                   
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="ville_naissance">Votre ville de naissance</label>
                    <input type="text" name="ville_naissance" id="ville_naissance" class="form-control @error("ville_naissance") is-invalid @enderror"/>
                   
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="pays_naissance">Votre pays de naissance</label>

                    <select name="pays_naissance" id="pays_naissance" class="from-control form-select show-tick @error("pays_naissance") is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        @forelse ($list_pays as $pays)
                            <option value="{{ $pays->id }}">{{ $pays->pays_name }}</option>
                        @empty
                            
                        @endforelse
                    </select>
                   
                </div>

            </div>

            <div class="row mt-4">
                <h6 class="underline_title">Informations sur votre adresse de résidence</h6>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="pays_residence">Votre pays de résidence</label>

                    <select name="pays_residence" id="pays_residence" class="from-control form-select show-tick @error("pays_residence") is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        @forelse ($list_pays as $pays)
                            <option value="{{ $pays->id }}">{{ $pays->pays_name }}</option>
                        @empty
                            
                        @endforelse
                    </select>
                   
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="ville_residence">Votre ville de résidence</label>
                    <input type="text" name="ville_residence" id="ville_residence" class="form-control @error("ville_residence") is-invalid @enderror"/>
                   
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="quartier_residence">Votre quartier de résidence</label>
                    <input type="text" name="quartier_residence" id="quartier_residence" class="form-control @error("quartier_residence") is-invalid @enderror"/>
                   
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="telephone">Votre Numéro de téléphone</label>
                    <input type="tel" name="telephone" id="telephone" class="form-control @error("telephone") is-invalid @enderror"/>
                   
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="adresse_mail">Votre Adresse mail</label>
                    <input type="email" name="adresse_mail" id="adresse_mail" readonly class="form-control @error("adresse_mail") is-invalid @enderror"/>
                   
                </div>
                

            </div>

            <div class="row mt-4">
                <h6 class="underline_title">Aptitudes et Informations personnelles & Professionnelles</h6>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="situation_matrimoniale">Situation Matrimoniale</label>
                    <select name="situation_matrimoniale" id="situation_matrimoniale" class="from-control form-select show-tick @error("situation_matrimoniale") is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="celibataire sans enfant">Célibataire sans enfant</option>
                        <option value="celibataire avec enfant">Célibataire avec enfant</option>
                        <option value="Marié">Marié légalement</option>
                        <option value="concubinage">En concubinage</option>
                        <option value="divorcé">Divorcé(e)</option>
                        <option value="veuf">Veuf(ve)</option>
                    </select>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="nombre_personnes_voyage">Nombre de personnes qui voyagent y compris vous-même</label>
                    <input type="number" name="nombre_personnes_voyage" id="nombre_personnes_voyage"  class="form-control @error("nombre_personnes_voyage") is-invalid @enderror"/>
                   
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="niveau_francais">Votre niveau de langue en Français</label>
                    <select name="niveau_francais" id="niveau_francais" class="from-control form-select show-tick @error("niveau_francais") is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="basique">Basique</option>
                        <option value="intermediaire">Intermédiaire</option>
                        <option value="avance">Avancé</option>
                    </select>
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="niveau_anglais">Votre niveau de langue en Anglais</label>
                    <select name="niveau_anglais" id="niveau_anglais" class="from-control form-select show-tick @error("niveau_anglais") is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="basique">Basique</option>
                        <option value="intermediaire">Intermédiaire</option>
                        <option value="avance">Avancé</option>
                    </select>
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="diplome_plus_eleve">Votre diplôme le plus élevé</label>
                    <select name="diplome_plus_eleve" id="diplome_plus_eleve" class="from-control form-select show-tick @error("diplome_plus_eleve") is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="certificat de metier">Certificat de Métier</option>
                        <option value="bepc">BEPC</option>
                        <option value="bac">BAC</option>
                        <option value="bts">BTS</option>
                        <option value="licence">Licence</option>
                        <option value="maitrise">Maîtrise</option>
                        <option value="ir,dea,dess,master">Ir,DEA, DESS, Master</option>
                        <option value="doctorat">Doctorat</option>
                    </select>
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="profession">Votre Profession</label>
                    <select name="profession" id="profession" class="from-control form-select show-tick @error("profession") is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="mecanicien">Mecanicien</option>
                        <option value="soudeur">Soudeur</option>
                    </select>
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="annees_experience">Nombre d'années d'expérience</label>
                    <select name="annees_experience" id="annees_experience" class="from-control form-select show-tick @error("annees_experience") is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="<1">Inférieur à 1</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6+">6 et plus</option>
                    </select>
                </div>

                
            </div>
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 mt-4 text-center">
                    <button type="submit" class="btn btn-outline-info" id="download-consentement-suivant">
                        Valider  & Continuer
                        <i class="fa fa-chevron-circle-right">&nbsp;</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>