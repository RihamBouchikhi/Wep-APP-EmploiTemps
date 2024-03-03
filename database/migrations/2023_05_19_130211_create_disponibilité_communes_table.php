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
        Schema::create('disponibilité_communes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('Jour_DC')->nullable();
//intevalle 1
            $table->time('Dc_HeureDébut_Int1')->nullable();
            $table->time('Dc_HeureFin_Int1')->nullable();
//intervalle 2
            $table->time('Dc_HeureDébut_Int2')->nullable();
            $table->time('Dc_HeureFin_Int2')->nullable();
//intervalle 3
            $table->time('Dc_HeureDébut_Int3')->nullable();
            $table->time('Dc_HeureFin_Int3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('disponibilité_communes');
    }
};
