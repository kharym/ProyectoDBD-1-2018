<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacione extends Model
{
    // relacion 1-1 con aeropuerto... aeropuerto tiene las llaves de ubicaciones en el MER
    public function aeropuerto(){
    	return $this->hasOne(Aeropuerto::class,'ubicacion_id');
	}

	// relacion 1-1 con alojamientos... alojamientos tiene las llaves de ubicaciones en el MER
	public function alojamiento(){
    	return $this->hasOne(Alojamiento::class,'ubicacion_id');
	}

	// relacion 1-1 con traslados... traslados tiene las llaves de ubicaciones en el MER
	public function traslado(){
    	return $this->hasOne(Traslado::class,'ubicacion_id');
	}
}
