<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ValidadorModel extends Model
{
    use HasFactory;
    protected $primaryKey = 'Id_Validador';
    protected $foreingKey = 'id';
    protected $table = 'validadores';
    protected $fillable = [
        'Nombre',
        'ApellidoPaterno',
        'ApellidoMaterno',
        'Cargo'
    ];
    public function user()
    {
        return $this->belongsTo('\App\Models\UserModel','id','id');
    }
}
