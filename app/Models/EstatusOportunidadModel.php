<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatusOportunidadModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_SolicitudEmpresa';
    protected $foreingKeyS = 'Id_Solicitud';
    protected $foreingKeyE = 'Id_Empresa';
    protected $table = 'solicitudes_empresas';
    protected $fillable = [
        'Id_Solicitud',
        'Id_Empresa',
        'Fecha',
        'Tipo'
    ];
}
