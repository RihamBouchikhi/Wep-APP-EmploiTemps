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
        Schema::create('définirs', function (Blueprint $table) {
            
            $table->timestamps();

            $table->unsignedBigInteger('id_Dispo'); // Clé étrangère
            $table->foreign('id_Dispo')->references('id')->on('disponibilités')->onDelete('cascade');

            $table->unsignedBigInteger('id_DispoCmn'); // Clé étrangère
            $table->foreign('id_DispoCmn')->references('id')->on('disponibilité_communes')->onDelete('cascade');

            $table->primary(['id_Dispo', 'id_DispoCmn']);

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('définirs');
    }
};
