<style>
    .underline_title {

        border-bottom: 2px grey dotted;
        padding-bottom: 5px;
    }
</style>

<link rel="stylesheet" href="{{ asset('storage/assets/bootstrap-5.3.3/css/bootstrap.min.css') }}">

<div class="row">
    <div class="col-12">
        <h3 class="underline_title">Bonjour M/Mme
            {{ $infos_souscription->clientServiceConcerne->nom . ' ' . $infos_souscription->clientServiceConcerne->prenom }}
        </h3>

        <p class="p-2">
            Votre inscription a été un succès. Nous vous adresserons un rapport d'étude de votre dossier
            d'ici <strong>sept (7) jours calendaires</strong> .
            Veuillez trouver à la suite de cette lettre les informations que vous avez fournies ainsi que le
            <strong>code qui vous permet de suivre votre dossier sur la plate-forme</strong> .

            {{-- Nous vous remercions de la confiance que vous avez placée en nous. Vous ne serez pas déçu.e. Ci-dessous, vous verrez les informations importantes liées à votre inscription sur notre plateforme. Le 
        <strong>Code d'Inscription</strong> est le code qui vous permet de suivre votre dossier sur la plateforme et voir son évolution afin de pouvoir y apporter des détails supplémentaires le cas échéant. --}}
        </p>
    </div>
</div>

<div class="row" style="margin-top: 5px">
    <div class="col-12 table-responsive">

        <table class="table table-bordered table-striped table-condensed"
            style="padding: 3px; border : 2px solid black;">
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

                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <div class="" style="margin-top: 10px;">
        Le Secrétariat <br>
        <a href="mailto:info@groupeenvol.org">info@groupeenvol.org</a><br>
        <a href="tel:+22951874777"> (+229) 51874777</a> <br>
        <a href="https://www.groupeenvol.org">www.groupeenvol.org</a> <br>
        <address>
            Ilot 27897, A Bis <br>
            Abomey Calavi, République du Bénin <br>
        </address>
    </div>

    <div class="col-12">

        <p class="p-3 alert alert-info "
            style="border : 2px dotted darkred; padding:10px; font-size : 1.2em; text-align : center; color : #e30613; font-weight : bold ">
            <strong>Laissez-nous vous représenter, Nous sommes fidèles à Nos engagements.</strong>
        </p>
    </div>
</div>
