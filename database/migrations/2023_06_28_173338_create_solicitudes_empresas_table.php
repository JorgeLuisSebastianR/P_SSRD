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
        Schema::create('solicitudes_empresas', function (Blueprint $table) {
            $table->increments('Id_SolicitudEmpresa');
            $table->integer('Id_Solicitud')->unsigned();
            $table->foreign('Id_Solicitud')->references('Id_Solicitud')->on('solicitudes');
            $table->integer('Id_Empresa')->unsigned();
            $table->foreign('Id_Empresa')->references('Id_Empresa')->on('empresas');
            $table->dateTime('fechaRevicio');
            $table->enum('Estatus', ['aceptada', 'rechazada']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes_empresas');
    }
};
