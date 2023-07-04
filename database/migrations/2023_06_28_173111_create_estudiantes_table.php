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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('Id_Estudiante');
            $table->integer('id')->unsigned();
            $table->foreign('id')->references('id')->on('users'); 
            $table->string('Nombre',20);
            $table->string('ApellidoPaterno',20);
            $table->string('ApellidoMaterno',20);
            $table->string('numControl',8);
            $table->dateTime('fechaNacimiento');
            $table->enum('Genero', ['Hombre', 'Mujer']);
            $table->string('carrera');
            $table->string('telefono',10);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiantes');
    }
};
