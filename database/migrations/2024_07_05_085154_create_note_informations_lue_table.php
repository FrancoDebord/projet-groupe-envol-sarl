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
        Schema::create('note_informations_lue', function (Blueprint $table) {
            $table->id();
            $table->date("date_lecture");
            $table->time("heure_lecture");
            $table->boolean("note_lue")->default(false);
            $table->boolean("note_information_telechargee")->default(false);
            $table->ipAddress("adresse_ip_ordinateur")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('note_informations_lue');
    }
};
