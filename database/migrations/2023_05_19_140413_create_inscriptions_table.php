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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date('Date_Inscription');

            $table->unsignedBigInteger('id_Etudiant'); // Clé étrangère
            $table->foreign('id_Etudiant')->references('id')->on('etudiants')->onDelete('cascade');

           /* $table->unsignedBigInteger('id_Formation'); // Clé étrangère
            $table->foreign('id_Formation')->references('id')->on('formations');
            */

            $table->unsignedBigInteger('id_Groupe'); // Clé étrangère
            $table->foreign('id_Groupe')->references('id')->on('groupes')->onDelete('cascade'); 

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};