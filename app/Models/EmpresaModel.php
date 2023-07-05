<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmpresaModel extends Model
{
    use HasFactory;

    protected $primaryKey = 'Id_Empresa';
    protected $table = 'empresas';
    protected $fillable = [
        'Nombre',
        'Sector',
        'Ubicacion',
        'Descripcion',
        'id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    
}
