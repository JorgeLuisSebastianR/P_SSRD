<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudEmModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_Solicitud';
    protected $foreingKeyS = 'Id_Estudiante';
    protected $foreingKeyE = 'Id_portunidadValidador ';
    protected $table = 'solicitudes';
    protected $fillable = [
        'fechaSolicitud',
        'Semestre',
        'Habilidades'
    ];
}
