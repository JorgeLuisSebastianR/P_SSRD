<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class oportunidadModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_Oportunidad';
    protected $foreingKey = 'Id_Empresa';
    protected $table = 'oportunidades';
    protected $fillable = [
        'Descripcion',
        'Requisitos',
        'Duracion',
        'Perfil',
        'Tipo'
    ];


}
