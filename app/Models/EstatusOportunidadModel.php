<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstatusOportunidadModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_OportunidadValidador';
    protected $foreingKeyS = 'Id_Oportunidad';
    protected $foreingKeyE = 'Id_Validador';
    protected $table = 'oportunidades_validadores';
    protected $fillable = [
        'fechaRevicio',
        'Estatus'
    ];
}
