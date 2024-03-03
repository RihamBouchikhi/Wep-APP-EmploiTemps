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
        Schema::create('avoir_dispo_groupes', function (Blueprint $table) {
            $table->timestamps();

            $table->unsignedBigInteger('id_Grp'); // Clé étrangère
            $table->foreign('id_Grp')->references('id')->on('groupes')->onDelete('cascade');

            $table->unsignedBigInteger('id_DispoGrp'); // Clé étrangère
            $table->foreign('id_DispoGrp')->references('id')->on('dispo_groupes')->onDelete('cascade');

            $table->primary(['id_Grp', 'id_DispoGrp']);

           // Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avoir_dispo_groupes');
    }
};
