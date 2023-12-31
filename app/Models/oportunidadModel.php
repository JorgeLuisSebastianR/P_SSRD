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
        'nombreProyecto',
        'Descripcion',
        'Requisitos',
        'Tipo',
        'fechaInicio',
        'fechaFin'
    ];
    public function validador()
    {
        return $this->hasOne(UserModel::class, 'id', 'Id_Validador');
    }

}
