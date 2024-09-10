<?php

namespace App\Providers;

use App\Models\InscriptionClientService;
use App\Models\Service;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        

        $all_services = Service::all();

        view()->share("all_services",$all_services);

        $dernieres_inscriptions_chaque_services = InscriptionClientService::with(["serviceConcerne"])
        ->groupBy("service_souscrit")
        ->selectRaw("max(date_inscription) as date_inscription, service_souscrit")
        ->get();



        view()->share("dernieres_inscriptions_chaque_services",$dernieres_inscriptions_chaque_services);
    }
}
