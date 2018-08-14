<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacione extends Model
{
    // relacion 1-1 con aeropuerto... aeropuerto tiene las llaves de ubicaciones en el MER
    public function aeropuertoLat(){
    	return $this->hasOne(Aeropuerto::class,'latitud_id');
	}

	public function aeropuertoLong(){
    	return $this->hasOne(Aeropuerto::class,'longitud_id');
	}
	// relacion 1-1 con alojamientos... alojamientos tiene las llaves de ubicaciones en el MER
	public function alojamientoLat(){
    	return $this->hasOne(Alojamiento::class,'latitud_id');
	}

	public function alojamientoLong(){
    	return $this->hasOne(Alojamiento::class,'longitud_id');
	}

	// relacion 1-1 con traslados... traslados tiene las llaves de ubicaciones en el MER
	public function trasladoLat(){
    	return $this->hasOne(Traslado::class,'latitud_id');
	}

	public function trasladoLong(){
    	return $this->hasOne(Traslado::class,'longitud_id');
	}
}
