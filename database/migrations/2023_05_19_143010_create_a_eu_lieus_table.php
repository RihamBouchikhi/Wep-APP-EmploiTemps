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
        Schema::create('a_eu_lieus', function (Blueprint $table) {
            
            $table->timestamps();

            $table->unsignedBigInteger('id_Salle'); // Clé étrangère
            $table->foreign('id_Salle')->references('id')->on('salles')->onDelete('cascade');

            $table->unsignedBigInteger('id_Seance'); // Clé étrangère
            $table->foreign('id_Seance')->references('id')->on('séances')->onDelete('cascade');

            $table->primary(['id_Salle', 'id_Seance']);

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('a_eu_lieus');
    }
};
