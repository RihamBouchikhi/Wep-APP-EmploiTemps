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
        Schema::create('dispo_ets', function (Blueprint $table) {

            
            $table->id();
            $table->timestamps();
            
            // Ajoutez les autres attributs spécifiques de la table dispo_et
           
            $table->unsignedBigInteger('id_DispoEtudiant');
            $table->foreign('id_DispoEtudiant')->references('id')->on('disponibilités')->onDelete('cascade');
        
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dispo_ets');
    }
};
