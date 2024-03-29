<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alojamiento extends Model
{
    // relacion 1-1 con ubicaciones... alojamientos tiene las llaves de ubicaciones en el MER

	public function ubicacion(){
    	return $this->belongsTo(Ubicacione::class,'ubicacion_id');
	}


	//relacion 1-n con habitaciones... habitaciones tiene la llave de alojamiento en el MER

    public function habitacione(){
    	return $this->hasMany(Habitacione::class,'alojamiento_id');
    }
}
