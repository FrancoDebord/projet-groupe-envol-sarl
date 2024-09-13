<div class="row">
    <div class="col-12">
        <form action="{{ route('ajouterInformationServiceEtFinaliserInscription') }}" method="POST"
            enctype="multipart/form-data">
            @csrf

            <input type="hidden" name="information_detaillee_fournie" id="information_detaillee_fournie"
                value="{{ session()->has('donnees_informations_detaillees') ? 1 : 0 }}">
            @error('information_detaillee_fournie')
                <div class="">

                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                </div>
            @enderror

            <input type="hidden" name="consentement_id_3" id="consentement_id_3"
            value="{{ session()->has('consentement_signe') ? session()->get('consentement_id') : '' }}">
            <input type="hidden" name="note_information_lue_id_3" id="note_information_lue_id_3" value="{{ session()->has("note_information_lue_id")?session()->get("note_information_lue_id"):"" }}"/>


            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <h2 class="text-center mt-4">Inscription au service et renseignements complémentaires</h2>
                </div>


                @php
                    $donnees_informations_detaillees = session()->has('donnees_informations_service')
                        ? session()->get('donnees_informations_service')
                        : null;
                @endphp
                <div class="col-12 col-sm-6 mt-3">
                    <fieldset class="">
                        <legend>Veuillez fournir les pièces suivantes</legend>

                        <div class="mb-3 pl-3 pr-3">
                            <label for="piece_identite" class="form-label">Pièce d'identité (Passeport, carte
                                d'identité, CIP) en PDF <strong class="text-danger">(*)</strong> </label>
                            <input class="form-control @error('piece_identite') is-invalid @enderror" type="file"
                                id="piece_identite" name="piece_identite" accept=".pdf" />

                            @error('piece_identite')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @if (!empty($donnees_informations_detaillees))
                                <div class="mt-3 pl-3 pr-3">

                                    <span class="alert alert-light " style="font-size: 10px">
                                        <a
                                            href="{{ route('VisualiserPdfDocument', ['document' => $donnees_informations_detaillees['piece_identite']]) }}">Voir
                                            {{ $donnees_informations_detaillees['piece_identite'] }}</a>
                                    </span>
                                </div>
                            @endif
                        </div>
                        <div class="mb-3 pl-3 pr-3">
                            <label for="attestation_diplome_plus_eleve" class="form-label">Attestation de votre diplôme
                                le plus élevé en PDF <strong class="text-danger">(*)</strong></label>
                            <input class="form-control @error('attestation_diplome_plus_eleve') is-invalid @enderror"
                                type="file" id="attestation_diplome_plus_eleve" name="attestation_diplome_plus_eleve"
                                accept=".pdf" />

                            @error('attestation_diplome_plus_eleve')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @if (!empty($donnees_informations_detaillees))
                                <div class="mt-3 pl-3 pr-3" style="font-size: 10px">

                                    <span class="alert alert-light">
                                        <a
                                            href="{{ route('VisualiserPdfDocument', ['document' => $donnees_informations_detaillees['attestation_diplome_plus_eleve']]) }}">Voir
                                            {{ $donnees_informations_detaillees['attestation_diplome_plus_eleve'] }}</a>
                                    </span>
                                </div>
                            @endif
                        </div>
                        <div class="mb-3 pl-3 pr-3">
                            <label for="releves_notes_diplome_plus_eleve" class="form-label">Relevé de notes de votre
                                diplôme le plus élevé en PDF (optionnel)</label>
                            <input class="form-control @error('releves_notes_diplome_plus_eleve') is-invalid @enderror "
                                type="file" id="releves_notes_diplome_plus_eleve"
                                name="releves_notes_diplome_plus_eleve" accept=".pdf" />

                            @error('releves_notes_diplome_plus_eleve')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @if (
                                !empty($donnees_informations_detaillees) &&
                                    array_key_exists('releves_notes_diplome_plus_eleve', $donnees_informations_detaillees))
                                <div class="mt-3 pl-3 pr-3" style="font-size: 10px">

                                    <span class="alert alert-light">
                                        <a
                                            href="{{ route('VisualiserPdfDocument', ['document' => $donnees_informations_detaillees['releves_notes_diplome_plus_eleve']]) }}">Voir
                                            {{ $donnees_informations_detaillees['releves_notes_diplome_plus_eleve'] }}</a>
                                    </span>
                                </div>
                            @endif
                        </div>
                    </fieldset>
                </div>
                <div class="col-12 col-sm-6 mt-3">

                    <div class="row">
                        <div class="col-12">

                            <fieldset>
                                <legend>Choisir le service <strong class="text-danger">(*)</strong></legend>

                                @php
                                    $service_inscription = old('service_inscription');

                                    if (!$service_inscription) {
                                        if ($donnees_informations_detaillees) {
                                            $service_inscription =
                                                $donnees_informations_detaillees['service_inscription'];
                                        }
                                    }

                                    $compteur_service = 1;
                                @endphp

                                @forelse ($all_services_actifs as $service)
                                    <div class="form-check">
                                        <input class="form-check-input radio_service_inscription" type="radio" name="service_inscription"
                                            id="service_inscription_{{ $compteur_service }}"
                                            value="{{ $service->id }}"
                                            {{ $service_inscription == $service->id ? 'checked' : '' }} />
                                        <label class="form-check-label"
                                            for="service_inscription_{{ $compteur_service++ }}">
                                            {{ $service->nom_service }}
                                        </label>
                                    </div>

                                @empty
                                    <p class="alert alert-info p-2 text-center">Aucun service actif pour le moment.</p>
                                @endforelse
                                {{-- <div class="form-check">

                                    <input class="form-check-input" type="radio" name="service_inscription"
                                        id="service_inscription_1" value="conseil et assistance voyage"
                                        {{ $service_inscription == 'conseil et assistance voyage' ? 'checked' : '' }} />
                                    <label class="form-check-label" for="service_inscription_1">
                                        Conseil et Assistance de voyage
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="service_inscription"
                                        id="service_inscription_2" value="intermediation de recrutement"
                                        {{ $service_inscription == 'intermediation de recrutement' ? 'checked' : '' }} />
                                    <label class="form-check-label" for="service_inscription_2">
                                        Intermédiation de recrutement
                                    </label>
                                </div> --}}

                                @error('service_inscription')
                                    <div class="form-check">
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    </div>
                                @enderror

                            </fieldset>
                        </div>

                        <div class="col-12 form-group-sm mt-3">
                            <label for="pays_service">Pays de destination (*)</label>
                            @php
                                    $pays_service = old('pays_service');

                                    if (!$pays_service) {
                                        if (!empty($donnees_informations_detaillees) && array_key_exists('pays_service', $donnees_informations_detaillees)) {
                                            $pays_service = $donnees_informations_detaillees['pays_service'];
                                        }
                                    }

                                    $list_pays_service = [];

                                    if( session()->has("list_pays_service")){

                                        $list_pays_service =  session()->get("list_pays_service");
                                    }
                                    else {
                                       $list_pays_service = $list_pays;//Liste de tous les pays
                                    }

                                @endphp

                            <select name="pays_service" id="pays_service"
                                class="from-control form-select show-tick @error('pays_service') is-invalid @enderror">
                                <option value="">Sélectionner une option</option>
                                

                                @forelse ($list_pays_service as $pays)
                                    <option value="{{ $pays->pays_name }}"
                                        {{ $pays_service == $pays->pays_name ? 'selected' : '' }}>
                                        {{ $pays->pays_name }}</option>
                                @empty
                                @endforelse
                            </select>

                            {{-- <p class="alert alert-info">
                                <strong>Conseil et Assistance de voyage</strong>, le pays de destination est
                                <strong>CANADA</strong> <br>
                                <strong>Intermédiation de recrutement</strong>, le pays de destination est
                                <strong>ROUMANIE</strong>
                            </p> --}}
                        </div>


                    </div>

                </div>

                <div class="col-12 mt-2 text-center">

                    <button type="submit" class="btn btn-outline-danger">
                        <i class="fa fa-shopping-cart">&nbsp;</i>
                        Payer les frais d'inscription et soumettre votre dossier
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
