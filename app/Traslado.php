<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traslado extends Model
{
    //relacion 1-n con compras... traslados tiene la llave de compras en el MER
	public function compras(){
    	return $this->belongsTo(Compra::class,'compra_id');
	}

	//relacion 1-n con proveedorTraslados... traslados tiene la llave de proveedorTraslados en el MER
    public function proveedorTraslado(){
    	return $this->belongsTo(ProveedorTraslado::class,'proveedor_traslado_id');
    }

    // relacion 1-1 con ubicaciones... traslados tiene las llaves de ubicaciones en el MER

	public function ubicacionLat(){
    	return $this->belongsTo(Ubicacione::class,'latitud_id');
	}

	public function ubicacionLong(){
    	return $this->belongsTo(Ubicacione::class,'longitud_id');
	}
}
