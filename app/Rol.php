<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //relacion 1-n con users... users tiene la llave de rols en el MER

    public function user(){
        return $this->hasMany(User::class,'rol_id');
    }
}
