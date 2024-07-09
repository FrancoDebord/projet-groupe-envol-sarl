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
        Schema::create('inscriptions_clients_services', function (Blueprint $table) {
            $table->id();
            $table->string("code_inscription")->unique()->nullable();
            $table->date("date_inscription");
            $table->time("heure_inscription");
            $table->integer("note_information_id")->index();
            $table->integer("consentement_signe_id")->index();
            $table->string("piece_identite")->nullable();
            $table->string("attestation_diplome_plus_eleve")->nullable();
            $table->string("releves_notes_diplome_plus_eleve")->nullable();
            $table->integer("client_id")->index();
            $table->string("pays_destination")->nullable();
            $table->enum("statut_paiement",["payé","remboursé","non effectué","en cours"])->nullable();
            $table->bigInteger("kkiapay_transaction_id")->index();
            $table->bigInteger("kkiapay_external_transaction_id");
            $table->string("service_souscrit")->nullable();;
            $table->integer("service_id")->index();
            $table->string("statut_dossier");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions_clients_services');
    }
};
