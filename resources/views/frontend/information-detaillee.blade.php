<div class="row">
    <div class="col-12 col-md-10 offset-md-1">
        <h2 class="text-center mt-4">Fournir vos informations détaillées dans ce formulaire</h2>

        <form action="{{ route('ValiderInformationDetailleeClient')."?tab=information-detaillee-tab" }}" method="POST">
            @csrf

            <input type="hidden" name="consentement_id" id="consentement_id"
                value="{{ session()->has('consentement_signe') ? session()->get('consentement_id') : '' }}">

            @php

                $consentement_id = session()->has('consentement_signe') ? session()->get('consentement_id') : 0;
                $consentement_obj = null;
                $nom_consentement = null;
                $prenom_consentement = null;
                $date_consentement = null;

                if ($consentement_id != 0) {
                    $consentement_obj = App\Models\ConsentementSigne::find($consentement_id);

                    if ($consentement_obj) {
                        $nom_consentement = $consentement_obj->nom_consentement;
                        $prenom_consentement = $consentement_obj->prenom_consentement;
                        $date_consentement = $consentement_obj->date_consentement;
                    }
                }

                $donnees_detaillees_client = [];

                if (session()->has('donnees_informations_detaillees')) {
                    $donnees_detaillees_client = session()->get('donnees_informations_detaillees');
                }
            @endphp
            <div class="row">
                <div class="col-12 col-sm-6 p-2">
                    <div class="row mt-4 div_information_compte">
                        <h6 class="underline_title">Vous n'avez pas encore de compte, créez-en un !</h6>

                        @php
                            $email_client = old('email_client');

                            if (!$email_client) {
                                if (array_key_exists('email_client', $donnees_detaillees_client)) {
                                    $email_client = $donnees_detaillees_client['email_client'];
                                }
                            }
                        @endphp
                        <div class="col-12 form-group-sm mt-3">
                            <label for="email_client">Votre adresse email <strong class="text-danger">(*)</strong></label>
                            <input type="email" class="form-control @error('email_client') is-invalid @enderror"
                                name="email_client" id="email_client" placeholder="example@email.com"
                                value="{{ $email_client }}" />

                            @error('email_client')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                        </div>
                        <div class="col-12 form-group-sm ">
                            <label for="nom_client">Votre Nom <strong class="text-danger">(*)</strong></label>

                            @php
                                $nom_client = old('nom_client') ?? $nom_consentement;

                                if (!$nom_client) {
                                    if (array_key_exists('nom_client', $donnees_detaillees_client)) {
                                        $nom_client = $donnees_detaillees_client['nom_client'];
                                    }
                                }
                            @endphp

                            <input type="text" class="form-control @error('nom_client') is-invalid @enderror"
                                name="nom_client" id="nom_client" value="{{ strtoupper($nom_client) }}" />

                            @error('nom_client')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 form-group-sm ">
                            <label for="prenom_client">Votre Prénom <strong class="text-danger">(*)</strong></label>

                            @php
                                $prenom_client = old('prenom_client') ?? $prenom_consentement;

                                if (!$prenom_client) {
                                    if (array_key_exists('prenom_client', $donnees_detaillees_client)) {
                                        $prenom_client = $donnees_detaillees_client['prenom_client'];
                                    }
                                }
                            @endphp
                            <input type="text" class="form-control @error('prenom_client') is-invalid @enderror"
                                name="prenom_client" id="prenom_client" value="{{ strtoupper($prenom_client) }}" />
                            @error('prenom_client')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        @php
                        $password_client = old('password_client');

                        if (!$password_client) {
                            if (array_key_exists('password_client', $donnees_detaillees_client)) {
                                $password_client = $donnees_detaillees_client['password_client'];
                            }
                        }
                    @endphp
                        <div class="col-12 form-group-sm ">
                            <label for="password_client">Définissez un mot de passe <strong class="text-danger">(*)</strong></label>
                            <input type="password" class="form-control @error('password_client') is-invalid @enderror"
                                name="password_client" value="{{ $password_client }}" />
                            @error('password_client')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-12 form-group-sm ">
                            <label for="confirm_password_client">Confirmez le mot de passe <strong class="text-danger">(*)</strong></label>

                            @php
                            $confirm_password_client = old('confirm_password_client');
    
                            if (!$confirm_password_client) {
                                if (array_key_exists('confirm_password_client', $donnees_detaillees_client)) {
                                    $confirm_password_client = $donnees_detaillees_client['confirm_password_client'];
                                }
                            }
                        @endphp

                            <input type="password"
                                class="form-control @error('confirm_password_client') is-invalid @enderror"
                                name="confirm_password_client" value="{{ $confirm_password_client }}" />

                            @error('confirm_password_client')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 p-2">
                    <div class="row mt-4 div_information_compte">
                        <h6 class="underline_title">Vous avez déjà un compte ? Connectez-vous !</h6>

                        <div class="col-12 form-group-sm mt-3">
                            <label for="code_client_ou_email">Votre Code de client ou votre Email</label>
                            <input type="text"
                                class="form-control @error('code_client_ou_email') is-invalid @enderror"
                                name="code_client_ou_email" placeholder="" value="{{ old('code_client_ou_email') }}" />

                            @error('code_client_ou_email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 form-group-sm ">
                            <label for="password_connexion">Votre mot de passe</label>
                            <input type="password"
                                class="form-control @error('password_connexion') is-invalid @enderror"
                                name="password_connexion" />

                            @error('password_connexion')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                    <label for="avez_vous_un_passeport_valide">Avez vous un passeport valide ? <strong class="text-danger">(*)</strong></label>

                    @php
                        $avez_vous_un_passeport_valide = old('avez_vous_un_passeport_valide');

                        if (!$avez_vous_un_passeport_valide) {
                            if (array_key_exists('avez_vous_un_passeport_valide', $donnees_detaillees_client)) {
                                $avez_vous_un_passeport_valide =
                                    $donnees_detaillees_client['avez_vous_un_passeport_valide'];
                            }
                        }
                    @endphp
                    <select name="avez_vous_un_passeport_valide" id="avez_vous_un_passeport_valide"
                        class="from-control form-select show-tick @error('avez_vous_un_passeport_valide') is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="1" {{ $avez_vous_un_passeport_valide == '1' ? 'selected' : '' }}>Oui
                        </option>
                        <option value="0" {{ $avez_vous_un_passeport_valide == '0' ? 'selected' : '' }}>Non
                        </option>
                    </select>

                    @error('avez_vous_un_passeport_valide')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="pays_nationalite">Votre pays de nationalité <strong class="text-danger">(*)</strong></label>

                    @php
                        $pays_nationalite = old('pays_nationalite');

                        if (!$pays_nationalite) {
                            if (array_key_exists('pays_nationalite', $donnees_detaillees_client)) {
                                $pays_nationalite = $donnees_detaillees_client['pays_nationalite'];
                            }
                        }
                    @endphp
                    <select name="pays_nationalite" id="pays_nationalite"
                        class="from-control form-select show-tick @error('pays_nationalite') is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        @forelse ($list_pays as $pays)
                            <option value="{{ $pays->id }}"
                                {{ $pays_nationalite == $pays->id ? 'selected' : '' }}>
                                {{ $pays->pays_name }}</option>
                        @empty
                        @endforelse
                    </select>

                    @error('pays_nationalite')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>


                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="votre_nom">Votre nom <strong class="text-danger">(*)</strong></label>
                    @php
                        $votre_nom = old('votre_nom') ?? $nom_consentement;

                        if (!$votre_nom) {
                            if (array_key_exists('votre_nom', $donnees_detaillees_client)) {
                                $votre_nom = $donnees_detaillees_client['votre_nom'];
                            }
                        }
                    @endphp
                    <input type="text" name="votre_nom" id="votre_nom" readonly
                        class="form-control @error('votre_nom') is-invalid @enderror"value="{{ strtoupper($votre_nom) }}" />

                    @error('votre_nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="votre_prenom">Votre prénom <strong class="text-danger">(*)</strong></label>
                    @php
                        $votre_prenom = old('votre_prenom') ?? $prenom_consentement;

                        if (!$votre_prenom) {
                            if (array_key_exists('votre_prenom', $donnees_detaillees_client)) {
                                $votre_prenom = $donnees_detaillees_client['votre_prenom'];
                            }
                        }
                    @endphp
                    <input type="text" name="votre_prenom" id="votre_prenom" readonly
                        class="form-control @error('votre_prenom') is-invalid @enderror"
                        value="{{ strtoupper($votre_prenom) }}" />

                    @error('votre_prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="date_naissance">Votre date de naissance <strong class="text-danger">(*)</strong></label>

                    @php
                        $date_naissance = old('date_naissance');

                        if (!$date_naissance) {
                            if (array_key_exists('date_naissance', $donnees_detaillees_client)) {
                                $date_naissance = $donnees_detaillees_client['date_naissance'];
                            }
                        }
                    @endphp
                    <input type="date" name="date_naissance" id="date_naissance"
                        class="form-control @error('date_naissance') is-invalid @enderror"
                        value="{{ $date_naissance }}" />

                    @error('date_naissance')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="ville_naissance">Votre ville de naissance <strong class="text-danger">(*)</strong></label>

                    @php
                        $ville_naissance = old('ville_naissance');

                        if (!$ville_naissance) {
                            if (array_key_exists('ville_naissance', $donnees_detaillees_client)) {
                                $ville_naissance = $donnees_detaillees_client['ville_naissance'];
                            }
                        }
                    @endphp

                    <input type="text" name="ville_naissance" id="ville_naissance"
                        class="form-control @error('ville_naissance') is-invalid @enderror"
                        value="{{ strtoupper($ville_naissance) }}" />

                    @error('ville_naissance')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="pays_naissance">Votre pays de naissance <strong class="text-danger">(*)</strong></label>

                    @php
                        $pays_naissance = old('pays_naissance');

                        if (!$pays_naissance) {
                            if (array_key_exists('pays_naissance', $donnees_detaillees_client)) {
                                $pays_naissance = $donnees_detaillees_client['pays_naissance'];
                            }
                        }
                    @endphp
                    <select name="pays_naissance" id="pays_naissance"
                        class="from-control form-select show-tick @error('pays_naissance') is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        @forelse ($list_pays as $pays)
                            <option value="{{ $pays->id }}" {{ $pays_naissance == $pays->id ? 'selected' : '' }}>
                                {{ $pays->pays_name }}</option>
                        @empty
                        @endforelse
                    </select>

                    @error('pays_naissance')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="sexe">Sexe <strong class="text-danger">(*)</strong></label>

                    @php
                        $sexe = old('sexe');

                        if (!$sexe) {
                            if (array_key_exists('sexe', $donnees_detaillees_client)) {
                                $sexe =
                                    $donnees_detaillees_client['sexe'];
                            }
                        }
                    @endphp
                    <select name="sexe" id="sexe"
                        class="from-control form-select show-tick @error('sexe') is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="M" {{ $sexe == 'M' ? 'selected' : '' }}>Masculin
                        </option>
                        <option value="F" {{ $sexe == 'F' ? 'selected' : '' }}>Féminin
                        </option>
                    </select>

                    @error('sexe')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>

            <div class="row mt-4">
                <h6 class="underline_title">Informations sur votre adresse de résidence</h6>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="pays_residence">Votre pays de résidence <strong class="text-danger">(*)</strong></label>

                    @php
                        $pays_residence = old('pays_residence');

                        if (!$pays_residence) {
                            if (array_key_exists('pays_residence', $donnees_detaillees_client)) {
                                $pays_residence = $donnees_detaillees_client['pays_residence'];
                            }
                        }
                    @endphp
                    <select name="pays_residence" id="pays_residence"
                        class="from-control form-select show-tick @error('pays_residence') is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        @forelse ($list_pays as $pays)
                            <option value="{{ $pays->id }}" {{ $pays_residence == $pays->id ? 'selected' : '' }}>
                                {{ $pays->pays_name }}</option>
                        @empty
                        @endforelse
                    </select>

                    @error('pays_residence')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="ville_residence">Votre ville de résidence <strong class="text-danger">(*)</strong></label>

                    @php
                        $ville_residence = old('ville_residence');

                        if (!$ville_residence) {
                            if (array_key_exists('ville_residence', $donnees_detaillees_client)) {
                                $ville_residence = $donnees_detaillees_client['ville_residence'];
                            }
                        }
                    @endphp

                    <input type="text" name="ville_residence" id="ville_residence"
                        class="form-control @error('ville_residence') is-invalid @enderror"
                        value="{{ strtoupper($ville_residence) }}" />

                    @error('ville_residence')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="quartier_residence">Votre quartier de résidence <strong class="text-danger">(*)</strong></label>

                    @php
                        $quartier_residence = old('quartier_residence');

                        if (!$quartier_residence) {
                            if (array_key_exists('quartier_residence', $donnees_detaillees_client)) {
                                $quartier_residence = $donnees_detaillees_client['quartier_residence'];
                            }
                        }
                    @endphp

                    <input type="text" name="quartier_residence" id="quartier_residence"
                        class="form-control @error('quartier_residence') is-invalid @enderror"
                        value="{{ strtoupper($quartier_residence) }}" />

                    @error('quartier_residence')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="telephone_client">Votre Numéro de téléphone <strong class="text-danger">(*)</strong></label>

                    @php
                        $telephone_client = old('telephone_client');

                        if (!$telephone_client) {
                            if (array_key_exists('telephone_client', $donnees_detaillees_client)) {
                                $telephone_client = $donnees_detaillees_client['telephone_client'];
                            }
                        }
                    @endphp

                    <input type="tel" name="telephone_client" id="telephone_client"
                        class="form-control @error('telephone_client') is-invalid @enderror"
                        value="{{ $telephone_client }}" />

                    @error('telephone_client')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="adresse_mail">Votre Adresse mail <strong class="text-danger">(*)</strong></label>

                    @php
                        $adresse_mail = old('adresse_mail');

                        if (!$adresse_mail) {
                            if (array_key_exists('adresse_mail', $donnees_detaillees_client)) {
                                $adresse_mail = $donnees_detaillees_client['adresse_mail'];
                            }
                        }
                    @endphp

                    <input type="email" name="adresse_mail" id="adresse_mail" readonly
                        class="form-control @error('adresse_mail') is-invalid @enderror" value="{{ $adresse_mail }}" />

                    @error('adresse_mail')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


            </div>

            <div class="row mt-4">
                <h6 class="underline_title">Aptitudes et Informations personnelles & Professionnelles</h6>

                @php
                    $situation_matrimoniale = old('situation_matrimoniale');
                    if (!$situation_matrimoniale) {
                        if (array_key_exists('situation_matrimoniale', $donnees_detaillees_client)) {
                            $situation_matrimoniale = $donnees_detaillees_client['situation_matrimoniale'];
                        }
                    }
                @endphp
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="situation_matrimoniale">Situation Matrimoniale <strong class="text-danger">(*)</strong></label>
                    <select name="situation_matrimoniale" id="situation_matrimoniale"
                        class="from-control form-select show-tick @error('situation_matrimoniale') is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="celibataire sans enfant"
                            {{ $situation_matrimoniale == 'celibataire sans enfant' ? 'selected' : '' }}>Célibataire
                            sans
                            enfant</option>
                        <option value="celibataire avec enfant"
                            {{ $situation_matrimoniale == 'celibataire avec enfant' ? 'selected' : '' }}>Célibataire
                            avec
                            enfant</option>
                        <option value="marié" {{ $situation_matrimoniale == 'marié' ? 'selected' : '' }}>Marié
                            légalement
                        </option>
                        <option value="concubinage" {{ $situation_matrimoniale == 'concubinage' ? 'selected' : '' }}>
                            En
                            concubinage</option>
                        <option value="divorcé" {{ $situation_matrimoniale == 'divorcé' ? 'selected' : '' }}>
                            Divorcé(e)
                        </option>
                        <option value="veuf/ve" {{ $situation_matrimoniale == 'veuf/ve' ? 'selected' : '' }}>Veuf(ve)
                        </option>
                    </select>

                    @error('situation_matrimoniale')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="nombre_personnes_voyage">Nombre de personnes qui voyagent y compris vous-même <strong class="text-danger">(*)</strong></label>

                    @php
                        $nombre_personnes_voyage = old('nombre_personnes_voyage');
                        if (!$nombre_personnes_voyage) {
                            if (array_key_exists('nombre_personnes_voyage', $donnees_detaillees_client)) {
                                $nombre_personnes_voyage = $donnees_detaillees_client['nombre_personnes_voyage'];
                            }
                        }
                    @endphp

                    <input type="number" name="nombre_personnes_voyage" id="nombre_personnes_voyage"
                        class="form-control @error('nombre_personnes_voyage') is-invalid @enderror"
                        value="{{ $nombre_personnes_voyage }}" />

                    @error('nombre_personnes_voyage')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="niveau_francais">Votre niveau de langue en Français <strong class="text-danger">(*)</strong></label>

                    @php
                        $niveau_francais = old('niveau_francais');

                        if (!$niveau_francais) {
                            if (array_key_exists('niveau_francais', $donnees_detaillees_client)) {
                                $niveau_francais = $donnees_detaillees_client['niveau_francais'];
                            }
                        }
                    @endphp
                    <select name="niveau_francais" id="niveau_francais"
                        class="from-control form-select show-tick @error('niveau_francais') is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="basique" {{ $niveau_francais == 'basique' ? 'selected' : '' }}>Basique</option>
                        <option value="intermediaire" {{ $niveau_francais == 'intermediaire' ? 'selected' : '' }}>
                            Intermédiaire</option>
                        <option value="avancé" {{ $niveau_francais == 'avancé' ? 'selected' : '' }}>Avancé</option>
                    </select>

                    @error('niveau_francais')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="niveau_anglais">Votre niveau de langue en Anglais <strong class="text-danger">(*)</strong></label>

                    @php
                        $niveau_anglais = old('niveau_anglais');

                        if (!$niveau_anglais) {
                            if (array_key_exists('niveau_anglais', $donnees_detaillees_client)) {
                                $niveau_anglais = $donnees_detaillees_client['niveau_anglais'];
                            }
                        }
                    @endphp
                    <select name="niveau_anglais" id="niveau_anglais"
                        class="from-control form-select show-tick @error('niveau_anglais') is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="basique" {{ $niveau_anglais == 'basique' ? 'selected' : '' }}>Basique</option>
                        <option value="intermediaire" {{ $niveau_anglais == 'intermediaire' ? 'selected' : '' }}>
                            Intermédiaire</option>
                        <option value="avancé" {{ $niveau_anglais == 'avancé' ? 'selected' : '' }}>Avancé</option>
                    </select>

                    @error('niveau_anglais')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="diplome_plus_eleve">Votre diplôme le plus élevé <strong class="text-danger">(*)</strong></label>

                    @php
                        $diplome_plus_eleve = old('diplome_plus_eleve');

                        if (!$diplome_plus_eleve) {
                            if (array_key_exists('diplome_plus_eleve', $donnees_detaillees_client)) {
                                $diplome_plus_eleve = $donnees_detaillees_client['diplome_plus_eleve'];
                            }
                    }
                    @endphp
                    <select name="diplome_plus_eleve" id="diplome_plus_eleve"
                        class="from-control form-select show-tick @error('diplome_plus_eleve') is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="certificat de metier"
                            {{ $diplome_plus_eleve == 'certificat de metier' ? 'selected' : '' }}>Certificat de Métier
                        </option>
                        <option value="bepc" {{ $diplome_plus_eleve == 'bepc' ? 'selected' : '' }}>BEPC</option>
                        <option value="bac" {{ $diplome_plus_eleve == 'bac' ? 'selected' : '' }}>BAC</option>
                        <option value="bts" {{ $diplome_plus_eleve == 'bts' ? 'selected' : '' }}>BTS</option>
                        <option value="licence" {{ $diplome_plus_eleve == 'licence' ? 'selected' : '' }}>Licence
                        </option>
                        <option value="maitrise" {{ $diplome_plus_eleve == 'maitrise' ? 'selected' : '' }}>Maîtrise
                        </option>
                        <option value="ir,dea,dess,master"
                            {{ $diplome_plus_eleve == 'ir,dea,dess,master' ? 'selected' : '' }}>Ir,DEA, DESS, Master
                        </option>
                        <option value="doctorat" {{ $diplome_plus_eleve == 'doctorat' ? 'selected' : '' }}>Doctorat
                        </option>
                    </select>

                    @error('diplome_plus_eleve')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="profession">Votre Profession <strong class="text-danger">(*)</strong></label>

                    @php
                        $profession = old('profession');

                        
                        if (!$profession) {
                            if (array_key_exists('profession', $donnees_detaillees_client)) {
                                $profession = $donnees_detaillees_client['profession'];
                            }
                    }
                    @endphp
                    <select name="profession" id="profession"
                        class="from-control form-select show-tick @error('profession') is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="maçon" {{ $profession == 'maçon' ? 'selected' : '' }}>Maçon</option>
                        <option value="menuisier" {{ $profession == 'menuisier' ? 'selected' : '' }}>Menuisier
                        </option>
                        <option value="carreleur" {{ $profession == 'carreleur' ? 'selected' : '' }}>Carreleur
                        </option>
                        <option value="peintre" {{ $profession == 'peintre' ? 'selected' : '' }}>Peintre</option>
                        <option value="plombier" {{ $profession == 'plombier' ? 'selected' : '' }}>Plombier</option>
                        <option value="cuisinier" {{ $profession == 'cuisinier' ? 'selected' : '' }}>Cuisinier
                        </option>
                        <option value="conducteur poids lourds"
                            {{ $profession == 'conducteur poids lourds' ? 'selected' : '' }}>Conducteur poids lourds
                        </option>
                        <option value="electricien tout genre"
                            {{ $profession == 'electricien tout genre' ? 'selected' : '' }}>Électricien tout genre
                        </option>
                        <option value="couturier" {{ $profession == 'couturier' ? 'selected' : '' }}>Couturier
                        </option>
                        <option value="serveur et serveuse"
                            {{ $profession == 'serveur et serveuse' ? 'selected' : '' }}>
                            Serveur et serveuse</option>
                        <option value="receptionniste" {{ $profession == 'receptionniste' ? 'selected' : '' }}>
                            Réceptionniste</option>
                        <option value="agent de securite" {{ $profession == 'agent de securite' ? 'selected' : '' }}>
                            Agent
                            de sécurité</option>
                        <option value="vulgarisateur" {{ $profession == 'vulgarisateur' ? 'selected' : '' }}>
                            Vulgarisateur
                        </option>
                        <option value="cordonnier" {{ $profession == 'cordonnier' ? 'selected' : '' }}>Cordonnier
                        </option>
                        <option value="agent d'entretien" {{ $profession == "agent d'entretien" ? 'selected' : '' }}>
                            Agent
                            d'entretien</option>
                        <option value="mecanicien auto" {{ $profession == 'mecanicien auto' ? 'selected' : '' }}>
                            Mécanicien auto</option>
                        <option value="eleveur" {{ $profession == 'eleveur' ? 'selected' : '' }}>Éleveur</option>
                        <option value="menagere" {{ $profession == 'menagere' ? 'selected' : '' }}>Ménagère</option>
                        <option value="jardinier" {{ $profession == 'jardinier' ? 'selected' : '' }}>Jardiner</option>
                        <option value="soudeur" {{ $profession == 'soudeur' ? 'selected' : '' }}>Soudeur</option>
                    </select>

                    @error('profession')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col-12 col-sm-6 col-md-4 form-group-sm mt-3">
                    <label for="annees_experience">Nombre d'années d'expérience <strong class="text-danger">(*)</strong></label>

                    @php
                        $annees_experience = old('annees_experience');
                        if (!$annees_experience) {
                            if (array_key_exists('annees_experience', $donnees_detaillees_client)) {
                                $annees_experience = $donnees_detaillees_client['annees_experience'];
                            }
                    }
                    @endphp
                    <select name="annees_experience" id="annees_experience"
                        class="from-control form-select show-tick @error('annees_experience') is-invalid @enderror">
                        <option value="">Sélectionner une option</option>
                        <option value="<1" {{ $annees_experience == '<1' ? 'selected' : '' }}>Inférieur à 1
                        </option>
                        <option value="1" {{ $annees_experience == '1' ? 'selected' : '' }}>1</option>
                        <option value="2" {{ $annees_experience == '2' ? 'selected' : '' }}>2</option>
                        <option value="3" {{ $annees_experience == '3' ? 'selected' : '' }}>3</option>
                        <option value="4" {{ $annees_experience == '4' ? 'selected' : '' }}>4</option>
                        <option value="5" {{ $annees_experience == '5' ? 'selected' : '' }}>5</option>
                        <option value="6+" {{ $annees_experience == '6+' ? 'selected' : '' }}>6 et plus</option>
                    </select>

                    @error('annees_experience')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


            </div>
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 mt-4 text-center">
                    <button type="submit" class="btn btn-outline-info" id="continuer-info-service">
                        Valider & Continuer
                        <i class="fa fa-chevron-circle-right">&nbsp;</i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
