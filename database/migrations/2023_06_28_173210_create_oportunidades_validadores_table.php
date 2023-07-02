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
        Schema::create('oportunidades_validadores', function (Blueprint $table) {
            $table->increments('Id_OportunidadValidador');
            $table->integer('Id_Oportunidad')->unsigned();
            $table->foreign('Id_Oportunidad')->references('Id_Oportunidad')->on('oportunidades');
            $table->integer('Id_Validador')->unsigned();
            $table->foreign('Id_Validador')->references('Id_Validador')->on('validadores');
            $table->dateTime('Fecha');
            $table->string('Estatus');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oportunidades_validadores');
    }
};
