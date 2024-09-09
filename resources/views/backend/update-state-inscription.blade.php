@extends('backend.index-admin')

@section('title', "Modifier l'état d'un dossier")

@section('breadcrumb')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Modifier l'état d'un dossier</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="#" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Détail Inscription
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium"> Modifier l'état d'un dossier</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="row mt-2 bg-white p-3">

        <div class="col-12">
            @if (session()->has("message"))
                <p class="alert alert-success p-2 text-center">
                    <i class="fa fa-exclamation-circle">&nbsp;</i>
                    {{  session()->get("message")}}
                </p>
            @endif
            @if (session()->has("error"))
                <p class="alert alert-danger p-2 text-center">
                    <i class="fa fa-cross">&nbsp;</i>
                    {{  session()->get("error")}}
                </p>
            @endif
        </div>
        @if ($infos_souscription)
            <div class="col-12 mt-2">

                @php

                    $client_service = $infos_souscription->clientServiceConcerne;
                    $titre = $infos_souscription->clientServiceConcerne->sexe == 'M' ? 'M.' : 'Mme';
                    $client =
                        $titre .
                        ' ' .
                        $infos_souscription->clientServiceConcerne->nom .
                        ' ' .
                        $infos_souscription->clientServiceConcerne->prenom;
                @endphp
                <p class="alert alert-light alert-dismissible fs-4">
                    Vous êtes sur le point de modifier le dossier <strong
                        class="text-danger">{{ $infos_souscription->code_inscription }}, appartenant à
                        {{ $client }}</strong>
                </p>
            </div>
            <div class="col-12 mt-2">

                <form action="{{ route("soumettreFormulaireModifierEtat",["inscription_code"=>$infos_souscription->code_inscription]) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <input type="hidden" name="inscription_id" id="inscription_id" value="{{ $infos_souscription->id }}">
                    <div class="row">
                        <div class="col-12 col-sm-6 form-group-sm mt-2">
                            <label for="client">Etat du dossier</label>
                            <select name="statut_dossier" id="statut_dossier"
                                class="form-control selectpicker show-tick @error('statut_dossier') is-invalid @enderror"
                                data-live-search="true">
                                <option value="">Sélectionner</option>
                                @php
                                    $etapes_dossiers = ["en cours d'étude", 'traité'];
                                @endphp

                                @forelse ($etapes_dossiers as $etape)
                                    <option value="{{ $etape }}"
                                        {{ $infos_souscription->statut_dossier == $etape ? 'selected' : '' }}>
                                        {{ ucfirst($etape) }}</option>
                                @empty
                                @endforelse
                            </select>

                            @error('statut_dossier')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-sm-6 form-group-sm mt-2">
                            <label for="service_id">Service choisi</label>
                            <select name="service_id" id="service_id"
                                class="form-control selectpicker show-tick @error('service_id') is-invalid @enderror"
                                data-live-search="true">
                                <option value="">Sélectionner</option>


                                @forelse ($list_services as $service)
                                    <option value="{{ $service->id }}"
                                        {{ $infos_souscription->service_id == $service->id ? 'selected' : '' }}>
                                        {{ $service->nom_service }}</option>
                                @empty
                                @endforelse
                            </select>

                            @error('service_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-sm-6 form-group-sm mt-2">
                            <label for="pays_destination">Pays de destination</label>
                            <select name="pays_destination" id="pays_destination"
                                class="form-control selectpicker show-tick @error('pays_destination') is-invalid @enderror"
                                data-live-search="true">
                                <option value="">Sélectionner</option>


                                @forelse ($list_pays as $pays)
                                    <option value="{{ Str::upper($pays->pays_name) }}"
                                        {{ $infos_souscription->pays_destination == Str::upper($pays->pays_name) ? 'selected' : '' }}>
                                        {{ $pays->pays_name }}</option>
                                @empty
                                @endforelse
                            </select>

                            @error('pays_destination')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-sm-6 form-group-sm mt-2">
                            <label for="pays_destination">Pièce d'identité (Passeport, carte
                                d'identité, CIP) en PDF </label>
                            <input type="file" name="piece_identite" id="piece_identite"
                                class="form-control @error('piece_identite') is-invalid @enderror" accept=".pdf" />

                            @error('piece_identite')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @if (!empty($infos_souscription->piece_identite))
                                <div class="mt-3">

                                    <span class="alert alert-light col-12" style="font-size: 10px">
                                        <strong class="text-danger">Ancien : </strong>
                                        <a href="{{ asset('storage/pdfs_documents/' . $infos_souscription->piece_identite) }}"
                                            data-nom_document="Pièce d'identité"
                                            data-client="{{ $client_service->nom . ' ' . $client_service->prenom }}"
                                            class="btn-visualiser-document btn-link">Voir
                                            {{ $infos_souscription->piece_identite }}</a>
                                    </span>
                                </div>
                            @endif
                        </div>


                        <div class="col-12 col-sm-6 form-group-sm mt-2">
                            <label for="attestation_diplome_plus_eleve">Attestation de votre diplôme
                                le plus élevé en PDF</label>
                            <input type="file" name="attestation_diplome_plus_eleve" id="attestation_diplome_plus_eleve"
                                class="form-control @error('attestation_diplome_plus_eleve') is-invalid @enderror"
                                accept=".pdf" />

                            @error('attestation_diplome_plus_eleve')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @if (!empty($infos_souscription->attestation_diplome_plus_eleve))
                                <div class="mt-3">

                                    <span class="alert alert-light col-12 " style="font-size: 10px">
                                        <strong class="text-danger">Ancien : </strong>
                                        <a href="{{ asset('storage/pdfs_documents/' . $infos_souscription->attestation_diplome_plus_eleve) }}"
                                            data-nom_document="Pièce d'identité"
                                            data-client="{{ $client_service->nom . ' ' . $client_service->prenom }}"
                                            class="btn-visualiser-document btn-link">Voir
                                            {{ $infos_souscription->attestation_diplome_plus_eleve }}</a>
                                    </span>
                                </div>
                            @endif
                        </div>

                        <div class="col-12 col-sm-6 form-group-sm mt-2">
                            <label for="releves_notes_diplome_plus_eleve">Relevé de notes de votre
                                diplôme le plus élevé en PDF (optionnel)</label>
                            <input type="file" name="releves_notes_diplome_plus_eleve"
                                id="releves_notes_diplome_plus_eleve"
                                class="form-control @error('releves_notes_diplome_plus_eleve') is-invalid @enderror"
                                accept=".pdf" />

                            @error('releves_notes_diplome_plus_eleve')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

                            @if (!empty($infos_souscription->releves_notes_diplome_plus_eleve))
                                <div class="mt-3">

                                    <span class="alert alert-light col-12 " style="font-size: 10px">
                                        <strong class="text-danger">Ancien : </strong>
                                        <a href="{{ asset('storage/pdfs_documents/' . $infos_souscription->releves_notes_diplome_plus_eleve) }}"
                                            data-nom_document="Pièce d'identité"
                                            data-client="{{ $client_service->nom . ' ' . $client_service->prenom }}"
                                            class="btn-visualiser-document btn-link">Voir
                                            {{ $infos_souscription->releves_notes_diplome_plus_eleve }}</a>
                                    </span>
                                </div>
                            @endif
                        </div>

                        <div class="col-12 text-center mt-3">
                            <button type="submit" class="btn btn-danger btn-lg">
                                <i class="fa fa-check-circle">&nbsp;</i>
                                Modifier les données de ce dossier
                            </button>
                        </div>

                    </div>

                </form>
            </div>
        @else
            <div class="col-12">
                <p class="alert alert-danger">
                    Une erreur de sélection du dossier à modifier est intervenue. Veuillez repartir sur la page précédente
                    et choisissez le dossier à modifier.
                </p>
            </div>
        @endif
    </div>

    @include('backend.partials.visualiser-document-dialog')
@endsection
