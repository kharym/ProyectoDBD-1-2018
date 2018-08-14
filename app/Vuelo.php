<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    //relacion 1-n con aerolinea... vuelos tiene la llave de aerolineas en el MER
	public function aerolinea(){
    	return $this->belongsTo(Aerolinea::class,'aerolinea_id');
	}

	//relacion 1-1 aeropuerto... vuelos tiene las llaves de aeropuerto en el MER
	public function aeropuerto(){
    	return $this->belongsTo(Aeropuerto::class,'aeropuertoOrigen_id');
	}

	public function aeropuerto(){
    	return $this->belongsTo(Aeropuerto::class,'aeropuertoDestino_id');
	}

	//relacion 1-n con asientos... asientos tiene las llaves de vuelo en el MER
	public function asiento(){
    	return $this->hasMany(Asiento::class,'vuelo_id');
    }

    //relacion 1-n con compras... vuelos tiene la llave de compras en el MER
	public function compras(){
    	return $this->belongsTo(Compra::class,'compra_id');
	}
}
