<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //relacion 1-n con actividads... actividads tiene la llave de compras en el MER

    public function actividad(){
    	return $this->hasMany(Actividad::class,'compra_id');
    }

    //relacion 1-n con autos... autos tiene la llave de compras en el MER

    public function auto(){
    	return $this->hasMany(Auto::class,'compra_id');
    }

    //relacion 1-n con habitaciones... habitaciones tiene la llave de compras en el MER

    public function habitacione(){
        return $this->hasMany(Habitacione::class,'compra_id');
    }

    //relacion 1-n con user... compras tiene la llave de users en el MER
    public function user(){
    	return $this->belongsTo(User::class,'email');
	}

    //relacion 1-n con historialcompras... historialcompras tiene la llave de compras en el MER

    public function historialcompra(){
        return $this->hasMany(Historialcompra::class,'compra_id');
    }

    //relacion 1-n con vuelo... vuelo tiene la llave de compras en el MER

    public function vuelo(){
        return $this->hasMany(Vuelo::class,'compra_id');
    }

    //relacion 1-n con traslado... traslado tiene la llave de compras en el MER

    public function traslado(){
        return $this->hasMany(Traslado::class,'compra_id');
    }
}
