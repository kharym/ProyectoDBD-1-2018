<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aerolinea extends Model
{
    //relacion 1-n con vuelos... vuelos tiene la llave de aerolineas en el MER
    public function vuelo(){
    	return $this->hasMany(Vuelo::class,'aerolinea_id');
    }
}
