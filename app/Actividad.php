<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    //relacion 1-n con compras... actividads tiene la llave de compras en el MER
    public function compras(){
    	return $this->belongsTo(Compra::class,'compra_id');
	}
}
