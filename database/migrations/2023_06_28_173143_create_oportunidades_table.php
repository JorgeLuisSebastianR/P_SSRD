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
            $table->string('nombreProyecto',100);
            $table->string('Descripcion',200);
            $table->string('Requisitos',200);
            $table->enum('Tipo', ['residencia', 'servicio social']);
            $table->dateTime('fechaInicio');
            $table->dateTime('fechaFin');
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
