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
        Schema::create('ge_pays_destinations', function (Blueprint $table) {
            $table->id();
            $table->string("nom_pays");
            $table->string("icon_image_pays")->nullable();
            $table->string("image_couverture1")->nullable();
            $table->string("image_couverture2")->nullable();
            $table->string("image1")->nullable();
            $table->string("image2")->nullable();
            $table->text("description")->nullable();
            $table->text("breve_description")->nullable();
            $table->text("benefice")->nullable();
            $table->text("whychoose")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ge_pays_destinations');
    }
};
