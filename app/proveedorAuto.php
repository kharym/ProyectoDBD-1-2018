<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProveedorAuto extends Model
{
    //relacion 1-n con autos... autos tiene la llave de proveedorAutos en el MER

    public function auto(){
    	return $this->hasMany(Auto::class,'proveedor_auto_id');
    }
}
