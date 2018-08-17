<?php

use Illuminate\Database\Seeder;

class PaquetesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Paquete::class, 10)->create();

        /*([
        	
	        'precioDescuento'=> '100000',
		  	'tipoPaquete'=> '3',
		  	'precioNormal'=> '500000',
		  	'descripcion' =>'Paquete que contiene vuelo + Hotel + Habitacion',
        ]);*/
    }
}
