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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('Id_Solicitud');
            $table->integer('Id_Estudiante')->unsigned();
            $table->foreign('Id_Estudiante')->references('Id_Estudiante')->on('estudiantes');
            $table->integer('Id_OportunidadValidador')->unsigned();
            $table->foreign('Id_OportunidadValidador')->references('Id_OportunidadValidador')->on('oportunidades_validadores');
            $table->dateTime('fechaSolicitud');
            $table->string('Semestre');
            $table->string('Habilidades');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
