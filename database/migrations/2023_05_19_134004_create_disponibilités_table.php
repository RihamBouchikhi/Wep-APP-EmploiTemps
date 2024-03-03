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
        Schema::create('disponibilités', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('Jour_Dispo')->nullable();
//intevalle 1
            $table->time('Disp_HeureDébut_Int1')->nullable();
            $table->time('Disp_HeureFin_Int1')->nullable();
//intervalle 2
            $table->time('Disp_HeureDébut_Int2')->nullable();
            $table->time('Disp_HeureFin_Int2')->nullable();
//intervalle 3
            $table->time('Disp_HeureDébut_Int3')->nullable();
            $table->time('Disp_HeureFin_Int3')->nullable();


           
            
            /*
            $table->unsignedBigInteger('id_DispoEt'); // Clé étrangère
            $table->foreign('id_DispoET')->references('id')->on('dispo_ets');

            $table->unsignedBigInteger('id_DispoSalle'); // Clé étrangère
            $table->foreign('id_DispoSalle')->references('id')->on('dispo_salles'); 

            $table->unsignedBigInteger('id_DispoEns'); // Clé étrangère
            $table->foreign('id_DispoEns')->references('id')->on('dispo_ens');

            */
                
            Schema::enableForeignKeyConstraints();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilités');
    }
};
