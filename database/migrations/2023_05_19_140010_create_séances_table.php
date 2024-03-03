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
        Schema::create('séances', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('JourSeance');
            $table->time('HeureDebutSeance');
            $table->time('HeureFinSeance');

            $table->unsignedBigInteger('id_Groupe'); // Clé étrangère du Groupe
            $table->foreign('id_Groupe')->references('id')->on('groupes')->onDelete('cascade');

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('séances');
    }
};
