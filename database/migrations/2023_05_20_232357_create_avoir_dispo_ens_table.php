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
        Schema::create('avoir_dispo_ens', function (Blueprint $table) {
           
            $table->timestamps();

            $table->unsignedBigInteger('id_Ens'); // Clé étrangère
            $table->foreign('id_Ens')->references('id')->on('enseignants')->onDelete('cascade');

            $table->unsignedBigInteger('id_DispoEns'); // Clé étrangère
            $table->foreign('id_DispoEns')->references('id')->on('dispo_ens')->onDelete('cascade');

            $table->primary(['id_Ens', 'id_DispoEns']);

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avoir_dispo_ens');
    }
};
