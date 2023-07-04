<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class UserModel extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id';
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'tipo'
    ];

    /**
     * Hash the password before saving it to the database.
     *
     * @param  string  $password
     * @return void
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
