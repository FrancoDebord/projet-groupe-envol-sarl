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
        Schema::create('consentements_signes', function (Blueprint $table) {
            $table->id();
            $table->date("date_consentement");
            $table->time("heure_consentement");
            $table->boolean("consentement_signe")->default(false);
            $table->integer("note_information_id")->index();
            $table->ipAddress("adresse_ip_ordinateur")->nullable();
            $table->string("nom_consentement");
            $table->string("prenom_consentement");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consentements_signes');
    }
};
