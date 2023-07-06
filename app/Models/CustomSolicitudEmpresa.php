<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomSolicitudEmpresa extends Model
{
    protected $table = 'solicitudes_empresas';
    protected $primaryKey = 'Id_SolicitudEmpresa';
    public $timestamps = true;

    public function solicitud()
    {
        return $this->belongsTo(CustomSolicitud::class, 'Id_Solicitud', 'Id_Solicitud');
    }

    public function empresa()
    {
        return $this->belongsTo(CustomEmpresa::class, 'Id_Empresa', 'Id_Empresa');
    }
}
