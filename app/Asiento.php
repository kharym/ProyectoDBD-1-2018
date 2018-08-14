<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asiento extends Model
{
    //relacion 1-n con vuelos... asiento tiene la llave de aerolineas en el MER
	public function vuelo(){
    	return $this->belongsTo(Vuelo::class,'vuelo_id');
	}
}
