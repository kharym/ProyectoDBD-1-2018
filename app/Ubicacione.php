<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacione extends Model
{
    // relacion 1-1 con aeropuerto... aeropuerto tiene las llaves de ubicaciones en el MER
    public function aeropuerto(){
    	return $this->hasOne(Aeropuerto::class,'latitud_id');
	}

	public function aeropuerto(){
    	return $this->hasOne(Aeropuerto::class,'longitud_id');
	}
	// relacion 1-1 con alojamientos... alojamientos tiene las llaves de ubicaciones en el MER
	public function alojamiento(){
    	return $this->hasOne(Alojamiento::class,'latitud_id');
	}

	public function alojamiento(){
    	return $this->hasOne(Alojamiento::class,'longitud_id');
	}

	// relacion 1-1 con traslados... traslados tiene las llaves de ubicaciones en el MER
	public function traslado(){
    	return $this->hasOne(Traslado::class,'latitud_id');
	}

	public function traslado(){
    	return $this->hasOne(Traslado::class,'longitud_id');
	}
}
