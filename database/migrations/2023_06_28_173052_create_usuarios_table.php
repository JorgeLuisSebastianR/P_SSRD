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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('Id_Usuario');
            $table->string('Correo');
            $table->string('Password');
            $table->string('Tipo_Usuario');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
