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
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('Id_Empresa');
            $table->integer('Id_Usuario')->unsigned();
            $table->foreign('Id_Usuario')->references('Id_Usuario')->on('usuarios');
            $table->string('Nombre');
            $table->string('Sector');
            $table->string('Ubicacion');
            $table->string('Descripcion');
            

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
