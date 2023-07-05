<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class solicitudOrgModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_OportunidadValidador';
    protected $foreingKeyO = 'Id_Oportunidad';
    protected $foreingKeyV = 'Id_Validador';
    protected $table = 'oportunidades_validadores';
    protected $fillable = [
        'Id_Oportunidad',
        'Id_Validador',
        'fechaRevicio',
        'Estatus'
    ];
}
