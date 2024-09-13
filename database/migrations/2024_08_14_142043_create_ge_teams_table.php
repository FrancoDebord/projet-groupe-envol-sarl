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
        Schema::create('ge_teams', function (Blueprint $table) {
            $table->id();
            $table->string("titre_member");
            $table->string("nom_member");
            $table->string("prenom_member");
            $table->string("poste_member");
            $table->integer("niveau_member")->default(1);
            $table->enum("sexe",["M",'F']);
            $table->string("telephone",255)->nullable();
            $table->string("email_member",255)->nullable();
            $table->string("adresse",255)->nullable();
            $table->text("bio_member")->nullable();
            $table->string("facebook",255)->nullable();
            $table->string("youtube",255)->nullable();
            $table->string("twitter",255)->nullable();
            $table->string("linkedin",255)->nullable();
            $table->string("photo_member",255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ge_teams');
    }
};
