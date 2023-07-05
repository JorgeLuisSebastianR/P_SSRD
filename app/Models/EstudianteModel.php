<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudianteModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_Estudiante';
    protected $foreingKey = 'id';

    protected $table = 'estudiantes';

    protected $fillable = [
        'id',
        'nombre',
        'apellidoPaterno',
        'apellidoMaterno',
        'numControl',
        'fechaNacimiento',
        'genero',
        'carrera',
        'telefono'
    ];

    public function usuario(){
        return $this->belongsTo('App\Models\UserModel', 'id', 'id');
    }
}
