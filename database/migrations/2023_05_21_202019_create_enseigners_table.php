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
        Schema::create('enseigners', function (Blueprint $table) {

            $table->timestamps();

            $table->unsignedBigInteger('Enseignant_id'); // Clé étrangère
            $table->foreign('Enseignant_id')->references('id')->on('enseignants')->onDelete('cascade');

            $table->unsignedBigInteger('Formation_id'); // Clé étrangère
            $table->foreign('Formation_id')->references('id')->on('formations')->onDelete('cascade');

            $table->primary(['Enseignant_id', 'Formation_id']);

            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseigners');
    }
};
