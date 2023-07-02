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
        Schema::create('validadores', function (Blueprint $table) {
            $table->increments('Id_Validador');
            $table->integer('Id_Usuario')->unsigned();
            $table->foreign('Id_Usuario')->references('Id_Usuario')->on('usuarios');
            $table->string('Nombre');
            $table->string('ApellidoPaterno');
            $table->string('ApellidoMaterno');
            $table->string('Cargo');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validadores');
    }
};
