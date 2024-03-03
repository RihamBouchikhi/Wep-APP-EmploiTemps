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
        Schema::create('avoir_dispo_etds', function (Blueprint $table) {
           
            $table->timestamps();

            $table->unsignedBigInteger('id_Etudiant'); // Clé étrangère
            $table->foreign('id_Etudiant')->references('id')->on('etudiants')->onDelete('cascade');

            $table->unsignedBigInteger('id_DispoEtd'); // Clé étrangère
            $table->foreign('id_DispoEtd')->references('id')->on('dispo_ets')->onDelete('cascade');

            $table->primary(['id_Etudiant', 'id_DispoEtd']);

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avoir_dispo_etds');
    }
};
