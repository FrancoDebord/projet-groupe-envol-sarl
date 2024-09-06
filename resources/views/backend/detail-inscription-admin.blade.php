@extends('backend.index-admin')

@section('title', 'Detail Inscription')


@section('breadcrumb')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Dashboard</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="#" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Détail Inscription
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium"> Détail Inscription</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table table-bordered table-striped table-condensed">
                <thead>
                    <tr>
                        <th>
                            Code Inscription
                        </th>
                        <th>
                            Date D'inscription
                        </th>
                        <th>Heure</th>
                        <th>Nom & Prénom</th>
                        <th>Note d'information</th>
                        <th>Consentement</th>
                        <th>Service </th>
                        <th>Pays destination</th>
                        <th>Etat Paiement</th>
                        <th>Statut</th>
                        {{-- <th>Action</th> --}}
                    </tr>
                </thead>

                <tbody>
                    @if ($infos_souscription)
                        <tr>
                            <td>{{ $infos_souscription->code_inscription }}</td>
                            <td>{{ date('d/m/Y', strtotime($infos_souscription->date_inscription)) }}</td>
                            <td>{{ $infos_souscription->heure_inscription }}</td>
                            <td>{{ $infos_souscription->clientServiceConcerne->nom . ' ' . $infos_souscription->clientServiceConcerne->prenom }}
                            </td>
                            <td>
                                <span
                                    class="badge {{ $infos_souscription->noteInformationLue ? 'bg-success' : 'bg-danger' }}">{{ $infos_souscription->noteInformationLue ? 'Lue' : 'Non Lue' }}</span>
                            </td>
                            <td>
                                <span
                                    class="badge {{ $infos_souscription->consentementSigne ? 'bg-success' : 'bg-danger' }}">{{ $infos_souscription->consentementSigne ? 'Signé' : 'Non Signé' }}</span>
                            </td>
                            <td>{{ $infos_souscription->service_souscrit }}</td>
                            <td>{{ $infos_souscription->pays_destination }}</td>
                            <td>
                                <span
                                    class="badge p-2 {{ $infos_souscription->statut_paiement == 'payé' ? 'bg-success' : 'bg-danger' }}">{{ $infos_souscription->statut_paiement }}</span>
                            </td>
                            <td>{{ $infos_souscription->statut_dossier }}</td>
                            {{-- <td>
                        <a href="#" class="btn btn-outline-primary">
                            <i class="fa fa-eye">&nbsp;</i>
                        </a>
                    </td> --}}
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

    </div>

    <h6 class="underline_title mt-1">Informations détaillées fournies pour votre inscription</h6>

    <div class="row mt-3">
        <div class="col-12 table-responsive">
            <table class="table table-bordered table-striped table-condensed">
                <tr>
                    <th colspan="2">
                        1
                    </th>
                    <th colspan="2">2</th>
                    <th colspan="2">3</th>
                    <th colspan="2">4</th>
                </tr>
                </thead>

                <tbody>
                    @if ($infos_souscription)

                        @php
                            $client_service = $infos_souscription->clientServiceConcerne;
                        @endphp
                        <tr>
                            <th>Avez-vous un passeport valide ?</th>
                            <td>{{ $client_service->avez_vous_un_passeport == 1 ? 'OUI' : 'NON' }}</td>
                            <th>Nationalité </th>
                            <td>{{ $client_service->pays_nationalite }}</td>

                            <th>Nom </th>
                            <td>{{ $client_service->nom }}</td>
                            <th>Prénom </th>
                            <td>{{ $client_service->prenom }}</td>
                        </tr>

                        <tr>
                            <th>Date de naissance</th>
                            <td>{{ date('d/m/Y', strtotime($client_service->date_naissance)) }}</td>
                            <th>Pays de Naissance </th>
                            <td>{{ $client_service->pays_naissance }}</td>

                            <th>Ville de naissance </th>
                            <td>{{ $client_service->ville_naissance }}</td>
                            <th>Sexe </th>
                            <td>{{ $client_service->sexe }}</td>
                        </tr>

                        <tr>

                            <th>Pays de Résidence </th>
                            <td>{{ $client_service->pays_residence }}</td>

                            <th>Ville de résidence </th>
                            <td>{{ $client_service->ville_residence }}</td>
                            <th>Quartier de résidence </th>
                            <td>{{ $client_service->quartier_residence }}</td>
                            <th>Numéro de Téléphone </th>
                            <td>{{ $client_service->telephone_client }}</td>
                        </tr>
                        <tr>

                            <th>Adresse mail </th>
                            <td>{{ $client_service->email_client }}</td>

                            <th>Situation matrimoniale </th>
                            <td>{{ $client_service->situation_matrimoniale }}</td>
                            <th>Nb de pers. qui voyagent </th>
                            <td>{{ $client_service->nb_personnes_voyage }}</td>
                            <th>Niveau en français </th>
                            <td>{{ $client_service->niveau_francais }}</td>
                        </tr>
                        <tr>

                            <th>Niveau en anglais </th>
                            <td>{{ $client_service->niveau_anglais }}</td>

                            <th>Diplôme le plus élevé </th>
                            <td>{{ $client_service->diplome_plus_eleve }}</td>
                            <th>Profession </th>
                            <td>{{ $client_service->profession }}</td>
                            <th>Nb. d'années d'expérience </th>
                            <td>{{ $client_service->nb_annees_experience }}</td>
                        </tr>

                        <tr>

                            <th>Service d'inscription </th>
                            <td>{{ $infos_souscription->service_souscrit }}</td>

                            <th>Pays de destination </th>
                            <td>{{ $infos_souscription->pays_destination }}</td>
                            <th>Pièce d'identité </th>
                            <td>
                                <span class="alert alert-light ">
                                    <a href="{{ asset('storage/pdfs_documents/' . $infos_souscription->piece_identite) }}"
                                        class="btn-link btn-visualiser-document" target="_blank"
                                        data-nom_document="Pièce d'identité"
                                        data-client="{{ $client_service->nom . ' ' . $client_service->prenom }}">
                                        <i class="fa fa-eye">&nbsp;</i>
                                        Voir
                                    </a>
                                </span>
                            </td>
                            <th>Copie du diplôme plus élevé </th>
                            <td>
                                <span class="alert alert-light ">
                                    <a href="{{ asset('storage/pdfs_documents/' . $infos_souscription->attestation_diplome_plus_eleve) }}"
                                        class="btn-link btn-visualiser-document" target="_blank"
                                        data-nom_document="Diplôme le plus élevé"
                                        data-client="{{ $client_service->nom . ' ' . $client_service->prenom }}">

                                        <i class="fa fa-eye">&nbsp;</i>
                                        Voir
                                    </a>
                                </span>
                            </td>

                        </tr>
                        <tr>
                            <th>Copie du relevé de notes </th>
                            <td>
                                @php
                                    $route_doc = $infos_souscription->releves_notes_diplome_plus_eleve
                                        ? asset(
                                            'storage/pdfs_documents/' .
                                                $infos_souscription->releves_notes_diplome_plus_eleve,
                                        )
                                        : '#';
                                @endphp

                                @if ($route_doc != '#')
                                    <span class="alert alert-light ">
                                        <a href="{{ $route_doc }}" target="_blank" data-nom_document="Relevé de notes"
                                            data-client="{{ $client_service->nom . ' ' . $client_service->prenom }}"
                                            class="btn-link btn-visualiser-document">

                                            <i class="fa fa-eye">&nbsp;</i>
                                            Voir
                                        </a>
                                    </span>
                                @endif

                            </td>

                            <th>Note d'information</th>
                            <td>
                                <span
                                    class="badge p-2 {{ $infos_souscription->noteInformationLue ? 'bg-success' : 'bg-danger' }}">{{ $infos_souscription->noteInformationLue ? 'Lue' : 'Non Lue' }}</span>
                            </td>
                            <th>Consentement</th>
                            <td>
                                <span
                                    class="badge p-2 {{ $infos_souscription->consentementSigne ? 'bg-success' : 'bg-danger' }}">{{ $infos_souscription->consentementSigne ? 'Signé' : 'Non Signé' }}</span>
                            </td>
                            <th>Etat paiement</th>
                            <td>
                                <span
                                    class="badge p-2 {{ $infos_souscription->statut_paiement == 'payé' ? 'bg-success' : 'bg-danger' }}">{{ $infos_souscription->statut_paiement }}</span>
                            </td>
                        </tr>


                    @endif
                </tbody>
            </table>
        </div>

    </div>

    <h6 class="underline_title mt-1">Résumé des fichiers soumis par le client</h6>

    <div class="row mt-3">
        <div class="col-12 table-responsive">
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>Pièce d'identité</th>
                        <th>Diplôme le plus élevé</th>
                        <th>Relevé de notes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <span class="alert alert-light ">
                                <a href="{{ asset('storage/pdfs_documents/' . $infos_souscription->piece_identite) }}"
                                    class="btn-link btn-visualiser-document" target="_blank"
                                    data-nom_document="Pièce d'identité"
                                    data-client="{{ $client_service->nom . ' ' . $client_service->prenom }}">
                                    Ouvrir {{ $infos_souscription->piece_identite }}
                                </a>
                            </span>
                        </td>

                        <td>
                            <span class="alert alert-light ">
                                <a href="{{ asset('storage/pdfs_documents/' . $infos_souscription->attestation_diplome_plus_eleve) }}"
                                    class="btn-link btn-visualiser-document" target="_blank"
                                    data-nom_document="Diplôme le plus élevé"
                                    data-client="{{ $client_service->nom . ' ' . $client_service->prenom }}">

                                    Ouvrir {{ $infos_souscription->attestation_diplome_plus_eleve }}
                                </a>
                            </span>
                        </td>

                        <td>
                            @php
                                $route_doc = $infos_souscription->releves_notes_diplome_plus_eleve
                                    ? asset(
                                        'storage/pdfs_documents/' .
                                            $infos_souscription->releves_notes_diplome_plus_eleve,
                                    )
                                    : '#';
                            @endphp

                            @if ($route_doc != '#')
                                <span class="alert alert-light ">
                                    <a href="{{ $route_doc }}" class="btn-link btn-visualiser-document"
                                        data-nom_document="Relevé de notes"
                                        data-client="{{ $client_service->nom . ' ' . $client_service->prenom }}"
                                        target="_blank">

                                        Ouvrir {{ $infos_souscription->releves_notes_diplome_plus_eleve }}
                                    </a>
                                </span>
                            @endif

                        </td>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h6 class="underline_title mt-1">Détails de la transaction effectuée <span class="text-danger">(KKIA PAY)</span> </h6>

    <div class="row mt-3">
        <div class="col-12 table-responsive">
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>1</th>
                        <th>2</th>
                        <th>3</th>
                        <th>4</th>
                        <th>5</th>
                        {{-- <th>6</th> --}}
                    </tr>
                </thead>
                <tbody>

                    @if ($infos_transaction)
                    <tr>
                        <td> <strong>Numéro de la transaction :</strong>  {{ $infos_transaction->client->phone }}</td>
                        <td> <strong>Nom du payeur :</strong>  {{ $infos_transaction->client->fullname }}</td>
                        <td> <strong>Email du payeur :</strong>  {{ $infos_transaction->client->email }}</td>
                        <td> <strong>Pays du payeur :</strong>  {{ $infos_transaction->client->country }}</td>
                        <td> <strong>Date du paiement :</strong>  {{ $infos_transaction->performedAt }}</td>
                        
                    </tr>

                    <tr>
                        <td> <strong>Source :</strong>  {{ $infos_transaction->source }}</td>
                        <td> <strong>Opérateur GSM :</strong>  {{ $infos_transaction->source_common_name }}</td>
                        <td> <strong>Montant Payé :</strong>  {{ $infos_transaction->amount }} FCFA</td>
                        <td> <strong>Frais supplémentaires :</strong>  {{ $infos_transaction->fees }} FCFA</td>
                        <td> <strong>Statut du paiement :</strong>  {{ $infos_transaction->status }}</td>
                        
                    </tr>
                    @else
                        <tr>

                            <td colspan="6">
                                <p class="alert alert-info text-center p-2">
                                    <i class="fa fa-exclamation-circle">&nbsp;</i>

                                    Aucune transaction n'a été effectuée. Aucun détail disponible.
                                </p>
                            </td>
                        </tr>
                    @endif

                </tbody>
            </table>
        </div>
    </div>

    @include('backend.partials.visualiser-document-dialog')
@endsection
