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
        Schema::create('déterminers', function (Blueprint $table) {
           
            $table->timestamps();

            $table->unsignedBigInteger('id_DispoEtd'); // Clé étrangère
            $table->foreign('id_DispoEtd')->references('id')->on('dispo_ets')->onDelete('cascade');

            $table->unsignedBigInteger('id_DispoGrp'); // Clé étrangère
            $table->foreign('id_DispoGrp')->references('id')->on('dispo_groupes')->onDelete('cascade');

            $table->primary(['id_DispoEtd', 'id_DispoGrp']);

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('déterminers');
    }
};