<div class="row">
    <div class="col-12 mt-3 text-center">

        @if (session()->has("donnees_informations_service_fourni"))
            
        <button class="btn btn-danger btn-lg kkiapay-button">
            <i class="fa fa-shopping-cart">&nbsp;</i>

            Cliquer ici pour procéder au Paiement
        </button>

        @php
            $infos_service_selectionne = session()->has("infos_service_selectionne")?session()->get("infos_service_selectionne"):null;
        @endphp
        <script amount="{{ $infos_service_selectionne?$infos_service_selectionne->frais_inscription:1 }}" 
        callback="{{ route("effectuerPaiementKKiaPay") }}"
        data=""
        position="center" 
        theme="#0095ff"
        {{-- sandbox="true" --}}
        key="182ba73163b255f793b8153eade717bb90a587e6" 
        src="https://cdn.kkiapay.me/k.js"></script>
        @else
            <div class="col-12">
                <p class="alert alert-info p-2">
                    <i class="fa fa-exclamation-circle">&nbsp</i>

                    Veuillez fournir toutes les informations précédentes avant de procéder au paiement.
                </p>
            </div>
        @endif

        <a class="btn btn-outline-warning btn-lg " href="#" id="annuler-inscription">
            <i class="fa fa-trash-alt">&nbsp;</i>

           Annuler l'inscription et effacer vos données
        </a>

        {{-- <kkiapay-widget  amount="1" key="182ba73163b255f793b8153eade717bb90a587e6"
            callback="https://kkiapay-redirect.com" /> --}}

            {{-- <kkiapay-widget amount="1"
                key="182ba73163b255f793b8153eade717bb90a587e6"
                url="{{ asset("storage/assets/logo/logo_envol.png") }}"
                position="center"
                 sandbox="true" 
                data=""
                callback="{{ route("effectuerPaiementKKiaPay") }}">
                </kkiapay-widget> --}}

              
    </div>
</div>