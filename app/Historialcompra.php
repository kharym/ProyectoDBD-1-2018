<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historialcompra extends Model
{
    // relacion 1-n con compras... historialcompras tiene las llaves de compras en el MER

	public function compras(){
    	return $this->belongsTo(Compra::class,'compra_id');
	}
}
