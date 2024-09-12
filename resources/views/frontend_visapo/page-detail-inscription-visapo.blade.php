@extends('index-visapo')

@section('title', 'Liste de vos inscriptions')


@section('content')
    <div class="country-area ">
        <div class="container">
            <h6 class="underline_title">Informations sommaires sur votre inscription</h6>

            <div class="row mt-1">
                <div class="col-12">
                    @if (session()->has('message_succes'))
                        <p class="alert  text-center alert-success">{{ session()->get('message_succes') }}</p>
                    @endif

                    @if (session()->has('message_error'))
                        <p class="alert  text-center alert-danger">{{ session()->get('message_error') }}</p>
                    @endif
                    <p class="alert  text-center " id="zone_message"></p>
                </div>

            </div>

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
                                <td>{{ date("d/m/Y",strtotime($infos_souscription->date_inscription)) }}</td>
                                <td>{{ $infos_souscription->heure_inscription }}</td>
                                <td>{{ $infos_souscription->clientServiceConcerne->nom." ".$infos_souscription->clientServiceConcerne->prenom }}</td>
                                <td>
                                    <span class="badge {{ $infos_souscription->noteInformationLue ? "bg-success":"bg-danger"}}">{{ $infos_souscription->noteInformationLue ? "Lue":"Non Lue" }}</span>
                                </td>
                                <td>
                                    <span class="badge {{ $infos_souscription->consentementSigne ? "bg-success":"bg-danger"}}">{{ $infos_souscription->consentementSigne ? "Signé":"Non Signé" }}</span>
                                </td>
                                <td>{{ $infos_souscription->service_souscrit }}</td>
                                <td>{{ $infos_souscription->pays_destination }}</td>
                                <td>
                                    <span class="badge p-2 {{ $infos_souscription->statut_paiement=="payé"?"bg-success":"bg-danger" }}">{{ $infos_souscription->statut_paiement }}</span>
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
                                <td>{{ $client_service->avez_vous_un_passeport==1?"OUI":"NON" }}</td>
                                <th>Nationalité </th>
                                <td>{{ $client_service->pays_nationalite }}</td>

                                <th>Nom </th>
                                <td>{{ $client_service->nom }}</td>
                                <th>Prénom </th>
                                <td>{{ $client_service->prenom }}</td>
                            </tr>

                            <tr>
                                <th>Date de naissance</th>
                                <td>{{ date("d/m/Y",strtotime($client_service->date_naissance)) }}</td>
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
                                    <span class="alert alert-light " style="font-size: 10px">
                                        <a
                                            href="{{ route("VisualiserPdfDocument",["document"=>$infos_souscription->piece_identite ]) }}" target="_blank">
                                            <i class="fa fa-eye">&nbsp;</i>
                                            Voir   
                                        </a>
                                    </span>
                                </td>
                                <th>Copie du diplôme plus élevé </th>
                                <td>
                                    <span class="alert alert-light " style="font-size: 10px">
                                        <a
                                            href="{{ route("VisualiserPdfDocument",["document"=>$infos_souscription->attestation_diplome_plus_eleve ]) }}" target="_blank">
                                            
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
                                            $route_doc = $infos_souscription->releves_notes_diplome_plus_eleve ? route("VisualiserPdfDocument",["document"=>$infos_souscription->releves_notes_diplome_plus_eleve ]):"#";
                                        @endphp

                                        @if ($route_doc !="#")
                                        <span class="alert alert-light " style="font-size: 10px">
                                            <a
                                                href="{{ $route_doc }}" target="_blank">
                                                
                                                <i class="fa fa-eye">&nbsp;</i>
                                                Voir
                                            </a>
                                        </span>                                
                                        @endif
                                    
                                </td>

                                <th>Note d'information</th>
                                <td>
                                    <span class="badge p-2 {{ $infos_souscription->noteInformationLue ? "bg-success":"bg-danger"}}">{{ $infos_souscription->noteInformationLue ? "Lue":"Non Lue" }}</span>
                                </td>
                                <th>Consentement</th>
                                <td>
                                    <span class="badge p-2 {{ $infos_souscription->consentementSigne ? "bg-success":"bg-danger"}}">{{ $infos_souscription->consentementSigne ? "Signé":"Non Signé" }}</span>
                                </td>
                                <th>Etat paiement</th>
                                <td>
                                    <span class="badge p-2 {{ $infos_souscription->statut_paiement=="payé"?"bg-success":"bg-danger" }}">{{ $infos_souscription->statut_paiement }}</span>
                                </td>
                            </tr>
                           
                               
                           @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

@endsection
