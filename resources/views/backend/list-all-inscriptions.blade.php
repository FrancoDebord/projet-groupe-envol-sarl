@extends('backend.index-admin')

@section('title', 'Liste de toutes les inscriptions')



@section('breadcrumb')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Dashboard</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="#" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Liste des inscriptions
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium"> Liste des inscriptions</li>
        </ul>
    </div>
@endsection

@section('content')
    <div class="row mt-2">
        <div class="col-xxl-12 col-lg-12">
            <div class="card h-100">
                <div class="card-body p-24">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                        <h6 class="mb-2 fw-bold text-lg mb-0">Toutes les inscriptions</h6>
                    </div>
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table mb-0" style="font-size: .8em" id="list-inscriptions-table">
                            <thead>
                                <tr>
                                    <th scope="col">Détails</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Client</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Pays</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Montant</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($all_clients_inscription as $inscription_client)
                                    <tr>
                                        <td>
                                            <a href="{{ route('afficherDetailInscriptionPage', ['inscription_code' => $inscription_client->code_inscription]) }}"
                                                class="btn btn-outline-warning ">
                                                <i class="fa fa-eye">&nbsp;</i>
                                                Voir
                                            </a>
                                        </td>
                                        <td>{{ $inscription_client->code_inscription }}</td>
                                        <td>
                                            {{-- <img src="{{ asset('storage/assets_backend/images/users/user2.png') }}"
                                            alt="" class="flex-shrink-0 me-12 radius-8"> --}}
                                            <span class="text-sm-left text-secondary-light flex-grow-1">
                                                {{ $inscription_client->clientServiceConcerne->nom . ' ' . $inscription_client->clientServiceConcerne->prenom }}
                                            </span>

                                        </td>
                                        <td>{{ $inscription_client->service_souscrit }}</td>
                                        <td>{{ $inscription_client->pays_destination }}</td>
                                        <td>{{ date('d/m/Y', strtotime($inscription_client->date_inscription)) }}</td>
                                        <td>{{ number_format($inscription_client->montant_paye) }} FCFA</td>
                                        <td>
                                            <span
                                                class="bg-warning-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">
                                                {{ ucfirst($inscription_client->statut_paiement) }}
                                            </span>

                                        </td>
                                        <td>
                                            <a href="{{ route("updateStateOfDossier",["inscription_code"=>$inscription_client->code_inscription]) }}" class="btn btn-outline-success-500">
                                                <i class="fa fa-info-circle">&nbsp;</i>
                                                Update
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
