<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacione extends Model
{
    // relacion 1-n con alojamientos... habitaciones tiene las llaves de alojamientos en el MER

	public function alojamiento(){
    	return $this->belongsTo(Alojamiento::class,'alojamiento_id');
	}

	// relacion 1-n con compras... habitaciones tiene las llaves de compras en el MER

	public function compras(){
    	return $this->belongsTo(Compra::class,'compra_id');
	}
}
