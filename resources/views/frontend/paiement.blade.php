<div class="row">
    <div class="col-12 mt-3 text-center">

        <a href="#" class="btn btn-danger btn-lg">
            <i class="fa fa-shopping-cart">&nbsp;</i>

            Cliquer ici pour procéder au Paiement
        </a>

        {{-- <kkiapay-widget  amount="1" key="182ba73163b255f793b8153eade717bb90a587e6"
            callback="https://kkiapay-redirect.com" /> --}}

            <kkiapay-widget amount="1"
                key="182ba73163b255f793b8153eade717bb90a587e6"
                url="{{ asset("storage/assets/logo/logo_envol.png") }}"
                position="center"
                {{-- sandbox="true" --}}
                data=""
                callback="{{ route("effectuerPaiementKKiaPay") }}">
                </kkiapay-widget>
    </div>
</div>