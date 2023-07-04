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

            $table->string('nombre',20);
            $table->string('apellidoPaterno',20);
            $table->string('apellidoMaterno',20);
            $table->string('numControl',8);
            $table->dateTime('fechaNacimiento');
            $table->enum('genero', ['Hombre', 'Mujer']);
            $table->enum('carrera', [
                'Ingeniero en Animación Digital y Efectos Visuales',
                'Ingeniería Industrial',
                'Ingeniería en Industrias Alimentarias',
                'Ingeniería Informática',
                'Ingeniería Mecatrónica',
                'Ingeniería en Sistemas Computacionales',
                'Ingeniería en Gestión Empresarial',
                'Licenciatura en Turismo'
            ]);
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
