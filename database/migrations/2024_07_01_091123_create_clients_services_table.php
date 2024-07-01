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
        Schema::create('client_services', function (Blueprint $table) {
            $table->id();
            $table->string("code_client")->unique();
            $table->boolean("avez_vous_un_passeport");
            $table->string("nom");
            $table->string("prenom");
            $table->enum("sexe",["M","F"]);
            $table->date("date_naissance");
            $table->string("pays_naissance");
            $table->string("ville_naissance");
            $table->string("pays_residence");
            $table->string("ville_residence");
            $table->string("quartier_residence");
            $table->string("pays_nationalite");
            $table->string("telephone");
            $table->string("email");
            $table->string("situation_matrimoniale");
            $table->enum("niveau_francais",["basic","intermediaire","avance"]);
            $table->enum("niveau_anglais",["basic","intermediaire","avance"]);
            $table->string("diplome_plus_eleve");
            $table->string("profession");
            $table->string("nb_annees_experience");
            $table->integer("nb_personnes_voyage")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_services');
    }
};
