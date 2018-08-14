<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historialuser extends Model
{
    //relacion 1-n con users... users tiene la llave de historialusers en el MER

    public function user(){
        return $this->hasMany(User::class,'historialuser_id');
    }
}
