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
        Schema::create('avoir_dispo_salles', function (Blueprint $table) {

            $table->timestamps();

            $table->unsignedBigInteger('id_Salle'); // Clé étrangère
            $table->foreign('id_Salle')->references('id')->on('salles')->onDelete('cascade');

            $table->unsignedBigInteger('id_DispoS'); // Clé étrangère
            $table->foreign('id_DispoS')->references('id')->on('dispo_salles')->onDelete('cascade');

            $table->primary(['id_Salle', 'id_DispoS']);

           // Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avoir_dispo_salles');
    }
};