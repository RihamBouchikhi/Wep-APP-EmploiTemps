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
        Schema::create('etablirs', function (Blueprint $table) {
           
            $table->timestamps();

            $table->unsignedBigInteger('id_DispoCmn'); // Clé étrangère
            $table->foreign('id_DispoCmn')->references('id')->on('disponibilité_communes')->onDelete('cascade');

            $table->unsignedBigInteger('id_Seance'); // Clé étrangère
            $table->foreign('id_Seance')->references('id')->on('séances')->onDelete('cascade');

            $table->primary(['id_DispoCmn', 'id_Seance']);

            Schema::enableForeignKeyConstraints();

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etablirs');
    }
};
