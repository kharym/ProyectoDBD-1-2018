<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProveedorTraslado extends Model
{
    //relacion 1-n con traslados... traslados tiene la llave de proveedorTraslados en el MER

    public function traslado(){
    	return $this->hasMany(Traslado::class,'proveedor_traslado_id');
    }
}
