<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    //relacion 1-n con compras... autos tiene la llave de compras en el MER
    public function compras(){
    	return $this->belongsTo(Compra::class,'compra_id');
    }

    //relacion 1-n con proveedorAutos... autos tiene la llave de proveedorAutos en el MER
    public function proveedorAuto(){
    	return $this->belongsTo(ProveedorAuto::class,'proveedor_auto_id');
    }
}
