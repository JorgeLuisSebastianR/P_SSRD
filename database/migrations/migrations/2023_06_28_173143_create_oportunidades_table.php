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
        Schema::create('oportunidades', function (Blueprint $table) {
            $table->increments('Id_Oportunidad');
            $table->integer('Id_Empresa')->unsigned();
            $table->foreign('Id_Empresa')->references('Id_Empresa')->on('empresas');
            $table->string('Descripcion');
            $table->string('Requisitos');
            $table->string('Duracion');
            $table->string('Perfil');
            $table->string('Tipo');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oportunidades');
    }
};
