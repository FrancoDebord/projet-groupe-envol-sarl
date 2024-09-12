@extends('index-visapo')

@section('title',"Liste de vos inscriptions")
    

@section('content')
<div class="country-area ">
    <div class="container">
        <div class="row">
            <h5 class="underline_title mb-3 p-3">Liste de vos inscriptions</h5>
            <div class="row clearfix">
                <div class="col-12 table-responsive">
                    <table class="table table-bordered table-striped table-condensed" id="table-list-inscriptions-clients">
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
                                <th>Action</th>
                            </tr>
                        </thead>
        
                        <tbody>
                          @forelse ($list_inscriptions_clients as $infos_souscription)
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
                            <td>
                                <a href="{{ route("pageDetailServiceSouscrit",["code_inscription"=>$infos_souscription->code_inscription]) }}" class="btn btn-outline-primary">
                                    <i class="fa fa-eye">&nbsp;</i>
                                    Détail
                                </a>
                            </td>
                        </tr>
                          @empty
                              <tr>
                                <td colspan="11">
                                    <p class="alert alert-info p-3 text-center">
                                        Aucune inscription pour le moment.
                                    </p>
                                </td>
                              </tr>
                          @endforelse
        
                        
                               
                         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection