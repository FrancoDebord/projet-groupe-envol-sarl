@extends('backend.index-admin')

@section('title', 'Les messages de contact')


@section('breadcrumb')
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
        <h6 class="fw-semibold mb-0">Dashboard</h6>
        <ul class="d-flex align-items-center gap-2">
            <li class="fw-medium">
                <a href="#" class="d-flex align-items-center gap-1 hover-text-primary">
                    <iconify-icon icon="solar:home-smile-angle-outline" class="icon text-lg"></iconify-icon>
                    Liste des messages de contact
                </a>
            </li>
            <li>-</li>
            <li class="fw-medium"> Liste des messages de contact</li>
        </ul>
    </div>
@endsection


@section('content')
    <div class="row mt-2">
        <div class="col-xxl-12 col-lg-12">
            <div class="card h-100">
                <div class="card-body p-24">
                    <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mb-20">
                        <h6 class="mb-2 fw-bold text-lg mb-0">Tous les messages de contact</h6>
                    </div>
                    <div class="table-responsive scroll-sm">
                        <table class="table bordered-table mb-0" style="font-size: .8em" id="list-inscriptions-table">
                            <thead>
                                <tr>
                                    <th scope="col">Détails</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Heure</th>
                                    <th scope="col">Nom & Prénom</th>
                                    <th scope="col">Adresse Mail</th>
                                    <th scope="col">Message</th>
                                    <th scope="col" class="text-center">Status</th>
                                    <th scope="col" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($all_messages_contact as $message_contact)
                                    <tr>

                                        <td>
                                            <a href="#" class="btn btn-outline-primary btn-voir-details-message-contact" 
                                            data-id="{{ $message_contact->id }}"
                                            data-contact_name="{{ $message_contact->contact_name }}"
                                            data-contact_email="{{ $message_contact->contact_email }}"
                                            data-date_heure_contact="{{ date('d/m/Y à H:i', strtotime($message_contact->created_at)) }}"
                                            data-contact_message="{{ $message_contact->contact_message }}"
                                                >
                                                <i class="fa fa-eye">&nbsp;</i>
                                                Voir détails
                                            </a>
                                        </td>
                                        <td>{{ date('d/m/Y', strtotime($message_contact->created_at)) }}</td>
                                        <td>{{ date('H:i', strtotime($message_contact->created_at)) }}</td>

                                        <td>{{ $message_contact->contact_name }}</td>
                                        <td>
                                            <a
                                                href="mailto:{{ $message_contact->contact_email }}">{{ $message_contact->contact_email }}</a>
                                        </td>
                                        <td>{{ Str::limit($message_contact->contact_message, 50, '...') }}</td>
                                        <td>
                                            <span
                                                class="bg-warning-focus {{ $message_contact->lu == 0 ? 'text-danger' : 'text-success-main' }} px-24 py-4 rounded-pill fw-medium text-sm">
                                                {{ $message_contact->lu == 0 ? 'Non Lu' : 'Lu' }}
                                            </span>

                                        </td>
                                        <td>
                                            <a href="mailto:{{ $message_contact->contact_email }}"
                                                class="btn btn-outline-success-500" target="_blank">
                                                <i class="fa fa-reply">&nbsp;</i>
                                                Répondre
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

    @include('backend.partials.visualiser-contenu-message-contact')
@endsection
