<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //relacion 1-n con compras... compras tiene la llave de users en el MER

    public function compras(){
        return $this->hasMany(Compra::class,'email');
    }

    //relacion 1-n con historialusers... users tiene la llave de historialusers en el MER
    public function historialuser(){
        return $this->belongsTo(Historialuser::class,'historialuser_id');
    }
}
