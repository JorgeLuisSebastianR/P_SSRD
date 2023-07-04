<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudianteModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_Estudiante';
    protected $foreingKey = 'Id_usuario';

    protected $table = 'estudiantes';

    protected $fillable = [
        'Id_usuario',
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
        return $this->belongsTo('App\Models\UserModel', 'Id_usuario', 'Id_usuario');
    }
}
