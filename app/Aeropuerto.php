<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    // relacion 1-1 con vuelos... vuelos tiene las llaves de aeropuerto en el MER

	public function vuelo(){
    	return $this->hasOne(Vuelo::class,'aeropuertoOrigen_id');
	}

	public function vuelo(){
    	return $this->hasOne(Vuelo::class,'aeropuertoDestino_id');
	}

	// relacion 1-1 con ubicaciones... aeropuerto tiene las llaves de ubicaciones en el MER

	public function ubicacione(){
    	return $this->belongsTo(Ubicacione::class,'latitud_id');
	}

	public function ubicacione(){
    	return $this->belongsTo(Ubicacione::class,'longitud_id');
	}
}
