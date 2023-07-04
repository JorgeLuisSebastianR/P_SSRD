<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudianteModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_Estudiante';
    protected $table = 'estudiantes';
    protected $fillable = [
        'id',
        'Nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'numControl',
        'fechaNacimiento',
        'Genero',
        'carrera',
        'telefono'
    ];
}
