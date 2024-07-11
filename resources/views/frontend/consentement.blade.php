<div class="row">
    <div class="col-12">
        <form action="" id="form_consentement">
            @csrf

            @php
                $check_state= (session()->has("consentement_signe"))?"checked disabled":"";

                $consentement_id = session()->has("consentement_signe")?session()->get("consentement_id"):0;
                $consentement_obj = null;
                $nom_consentement = null;
                $prenom_consentement = null;
                $date_consentement = null;

                if($consentement_id != 0){

                    $consentement_obj = App\Models\ConsentementSigne::find($consentement_id);

                    if($consentement_obj){

                        $nom_consentement = $consentement_obj->nom_consentement;
                        $prenom_consentement = $consentement_obj->prenom_consentement;
                        $date_consentement = $consentement_obj->date_consentement;
                    }
                }
            @endphp
            
            <input type="hidden" name="note_information_lue_id" id="note_information_lue_id" value="{{ session()->has("note_information_lue_id")?session()->get("note_information_lue_id"):"" }}"/>
            
            @error('note_information_lue_id')
            <div class="">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
            </div>
            @enderror
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1" id="div_consentement">
                    <h2 class="text-center mt-4">Formulaire de consentement pour l’immigration et le recrutement</h2>
                    
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>DECLARATION</th>
                                <th>Veuillez cocher chaque case</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>La note d’information a été claire et compréhensible et 
                                    est écrite dans une langue que je maîtrise bien. J’ai eu la possibilité de réfléchir
                                     aux informations, de poser des questions et d’obtenir une réponse complète.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control @error("consentement_1") is-invalid @enderror" id="consentement_1" {{ $check_state }} name="consentement_1" data-size ="lg" data-offstyle="danger" data-width="80" data-height="20"  data-style="android" data-onstyle="info" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" />
                                    
                                    @error('consentement_1')
                                    <div class="">
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        </div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td >
                                    Je comprends que c’est moi-même qui ai décidé de me faire
                                     représenter par le Groupe Envol SARL en sa qualité de Représentant en immigration et  recrutement.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control @error("consentement_2") is-invalid @enderror" name="consentement_2" id="consentement_2" {{ $check_state }}  data-size ="lg" data-offstyle="danger" data-width="80" data-height="20" data-style="android" data-onstyle="info" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON"" />
                                
                                    @error('consentement_2')
                                    <div class="">
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        </div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>3</td>
                                <td>
                                    Je comprends que la procédure d’immigration et de recrutement implique deux (2) frais que je dois complètement 
                                    solder avant la collecte de mes données biométriques auprès des centres agréés.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control @error("consentement_3") is-invalid @enderror" name="consentement_3" id="consentement_3" {{ $check_state }}   data-width="80" data-offstyle="danger" data-height="20" data-style="android" data-onstyle="info" data-size ="lg" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" />
                                
                                    @error('consentement_3')
                                    <div class="">
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        </div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>4</td>
                                <td>
                                    Je comprends que si j’arrête moi-même la procédure d’immigration 
                                    en cours pour une quelconque raison, je ne serai remboursé d’aucun frais.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control @error("consentement_4") is-invalid @enderror" id="consentement_4" name="consentement_4" {{ $check_state }}   data-width="80" data-height="20" data-offstyle="danger"  data-style="android" data-onstyle="info" data-size ="lg" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" />
                                    
                                    @error('consentement_4')
                                    <div class="">
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        </div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>5</td>
                                <td>
                                    Je comprends que mes informations personnelles peuvent être transférées par 
                                    <a href="mailto:info@groupeenvol.org">info@groupeenvol.org</a> ou en main propre à mon employeur  mon école
                                     après mon recrutement ou mon admission, à une ambassade ou un consulat pour l’obtention de visa.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control @error("consentement_5") is-invalid @enderror" id="consentement_5" name="consentement_5" {{ $check_state }}  data-width="80" data-height="20" data-offstyle="danger" data-style="android" data-onstyle="info" data-size ="lg" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" />
                                    
                                    @error('consentement_5')
                                    <div class="">
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        </div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>6</td>
                                <td>
                                    Je donne mon accord à <strong>TOUT</strong> ce qui est écrit dans la note d’information.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control @error("consentement_6") is-invalid @enderror" id="consentement_6" {{ $check_state }}  name="consentement_6"  data-width="80" data-height="20" data-offstyle="danger" data-style="android" data-onstyle="info" data-size ="lg"  data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" />
                                    
                                    @error('consentement_6')
                                    <div class="">
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        </div>
                                    @enderror
                                </td>
                            </tr>

                            <tr>
                                <td>7</td>
                                <td>
                                    Je consens que mes données personnelles soient collectées et conservées aux fins d’immigration et de recrutement.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control @error("consentement_7") is-invalid @enderror" id="consentement_7" name="consentement_7" {{ $check_state }}  data-width="80" data-height="20" data-offstyle="danger" data-style="android" data-onstyle="info" data-size ="lg" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" />
                                    @error('consentement_7')
                                    <div class="">
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        </div>
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>
                                    Je donne mon accord pour les Cookies que Groupe Envol utilise à des fins d'expérience utilisateur.
                                </td>
                                <td class="text-center valign-center">
                                    <input type="checkbox" class="check_consentement form-control @error("consentement_8") is-invalid @enderror" id="consentement_8" name="consentement_8" {{ $check_state }}  data-width="80" data-height="20" data-offstyle="danger" data-style="android" data-onstyle="info" data-size ="lg" data-toggle="toggle" data-onlabel="OUI" data-offlabel="NON" />
                                    @error('consentement_8')
                                    <div class="">
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        </div>
                                    @enderror
                                </td>
                            </tr>

                        </tbody>
                        
                    </table>

                    <div class="w-100 mt-3">
                        <div class="form-group-sm">
                            <label for="nom_prenom_consentement">
                                <strong>Veuillez entrer votre Nom et Prénom pour la signature du consentement </strong> <strong class="text-danger">(*)</strong>
                            </label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control identite_consentement" name="nom_consentement" value="{{ $nom_consentement }}" {{ $nom_consentement != null?"readonly":"" }} id="nom_consentement" placeholder="Nom de famille" aria-label="Nom de famille">
                                {{-- <span class="input-group-text"></span> --}}
                                <input type="text" class="form-control identite_consentement" name="prenom_consentement" value="{{ $prenom_consentement }}" {{ $prenom_consentement != null?"readonly":"" }}  id="prenom_consentement" placeholder="Prénom" aria-label="Prénom">

                                @error('nom_consentement')
                                    <div class="">
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </div>
                                @enderror
                                @error('prenom_consentement')
                                    <div class="">
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </div>
                                @enderror
                              </div>
                        </div>

                        
                    </div>

                    <table class="table table-bordered mt-2">
                      <thead>
                        <tr>
                            <th>Noms et Prénoms du requérant principal</th>
                            <th>Date (jj/mm/aaaa)</th>
                            <th>Signature</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td class="nom_complet_consentement_affichage">{{ $nom_consentement." ".$prenom_consentement }}</td>
                            <td>{{ $date_consentement??date("d/m/Y") }}</td>
                            <td class="nom_complet_consentement_affichage">{{ $nom_consentement." ".$prenom_consentement }}</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
                <div class="col-12 col-md-10 offset-md-1 mt-4 text-center">

                    <button type="submit" class="btn btn-outline-info" id="download-consentement-suivant">
                        <i class="fa fa-hand-point-right">&nbsp;</i>
                        Valider pour signer le consentement & Continuer
                    </button>
                    
                    <a href="{{ route("ImprimerConsentementHTML") }}" class="btn btn-outline-danger" id="telecharger-consentement" target="_blank">
                        <i class="fa fa-download">&nbsp;</i>
                        Télécharger le consentement
                    </a>
                   
                </div>
            </div>
        </form>
    </div>
</div>