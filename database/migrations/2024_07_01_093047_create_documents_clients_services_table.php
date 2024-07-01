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
        Schema::create('documents_clients_services', function (Blueprint $table) {
            $table->id();
            $table->string("nom_document");
            $table->string("fichier_pdf");
            $table->string("service_name")->nullable();
            $table->integer("client_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents_clients_services');
    }
};
