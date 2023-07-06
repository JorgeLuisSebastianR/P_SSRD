<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\oportunidadModel;

class SolicutudEstudianteModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_Solicitud';
    protected $foreingKeyS = 'Id_Estudiante';
    protected $foreingKeyE = 'Id_OportunidadValidador';
    protected $table = 'solicitudes';
    protected $fillable = [
        'Id_Estudiante',
        'Id_OportunidadValidador',
        'fechaSolicitud',
        'Semestre',
        'Habilidades'
    ];
}
