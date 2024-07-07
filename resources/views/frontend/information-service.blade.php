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

            <div class="row">
                <div class="col-12 col-md-10 offset-md-1">
                    <h2 class="text-center mt-4">Inscription au service et renseignements complémentaires</h2>
                </div>



                <div class="col-12 col-sm-6 mt-3">
                    <fieldset>
                        <legend>Veuillez fournir les pièces suivantes</legend>

                        <div class="mb-3">
                            <label for="piece_identite" class="form-label">Pièce d'identité (Passeport, carte
                                d'identité, CIP) <strong class="text-danger">(*)</strong> </label>
                            <input class="form-control @error('piece_identite') is-invalid @enderror" type="file"
                                id="piece_identite" name="piece_identite" accept=".pdf" />

                            @error('piece_identite')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="attestation_diplome_plus_eleve" class="form-label">Attestation de votre diplôme
                                le plus élevé <strong class="text-danger">(*)</strong></label>
                            <input class="form-control @error('attestation_diplome_plus_eleve') is-invalid @enderror"
                                type="file" id="attestation_diplome_plus_eleve" name="attestation_diplome_plus_eleve"
                                accept=".pdf" />

                            @error('attestation_diplome_plus_eleve')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="releves_notes_diplome_plus_eleve" class="form-label">Relevé de notes de votre
                                diplôme le plus élevé (optionnel)</label>
                            <input class="form-control @error('releves_notes_diplome_plus_eleve') is-invalid @enderror "
                                type="file" id="releves_notes_diplome_plus_eleve"
                                name="releves_notes_diplome_plus_eleve" accept=".pdf" />

                            @error('releves_notes_diplome_plus_eleve')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
                                @endphp
                                <div class="form-check">
                                    {{-- <input class="form-check-input service_inscription" type="radio" name="service_inscription" id="service_inscription_1" value="conseil et assistance voyage" /> --}}
                                    <input class="form-check-input" type="radio" name="service_inscription"
                                        id="service_inscription_1" value="conseil et assistance voyage"
                                        {{ $service_inscription == 'conseil et assistance voyage' ? 'checked' : '' }} />
                                    <label class="form-check-label" for="service_inscription_1">
                                        Conseil et Assistance de voyage
                                    </label>
                                </div>
                                <div class="form-check">
                                    {{-- <input class="form-check-input service_inscription" type="radio" name="service_inscription" id="service_inscription_2" value="intermediation de recrutement" /> --}}
                                    <input class="form-check-input" type="radio" name="service_inscription"
                                        id="service_inscription_2" value="intermediation de recrutement"
                                        {{ $service_inscription == 'intermediation de recrutement' ? 'checked' : '' }} />
                                    <label class="form-check-label" for="service_inscription_2">
                                        Intermédiation de recrutement
                                    </label>
                                </div>

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
                            {{-- <select name="pays_service" id="pays_service" class="from-control form-select show-tick @error('pays_service') is-invalid @enderror">
                                <option value="">Sélectionner une option</option>
                                <option value="Canada">Canada</option>
                                <option value="Roumanie">Roumanie</option>
                            </select> --}}

                            <p class="alert alert-info">
                                <strong>Conseil et Assistance de voyage</strong>, le pays de destination est
                                <strong>CANADA</strong> <br>
                                <strong>Intermédiation de recrutement</strong>, le pays de destination est
                                <strong>ROUMANIE</strong>
                            </p>
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
