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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string("nom_service");
            $table->string("nom_court_service");
            $table->enum("statut_service",["gratuit","payant"])->default("payant");
            $table->float("frais_inscription")->default(0.0);
            $table->enum("devise",["FCFA"])->default("FCFA");
            $table->string("url_service")->nullable();
            $table->string("url_name")->nullable();
            $table->boolean("etat_service")->default(0);
            $table->string("image")->nullable();
            $table->text("description")->nullable();
            $table->text("courte_description")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
