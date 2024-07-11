<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('options_services_inscriptions', function (Blueprint $table) {
            $table->string("nom_service");
            $table->enum("statut_service",["gratuit","payant"])->default("payant");
            $table->float("frais_inscription")->default(0.0);
            $table->enum("devise",["FCFA"])->default("FCFA");
            $table->string("url_service")->nullable();
            $table->boolean("etat_service")->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options_services_inscriptions');
    }
};
