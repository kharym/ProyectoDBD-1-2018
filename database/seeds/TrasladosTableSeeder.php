<?php

use Illuminate\Database\Seeder;

class TrasladosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Traslado::class, 10)->create();

        /*([
        	
		  	'precioTraslado'=> '10000',
		  	'planificacionParadas'=> 'asudhaufhaudhad',
		  	'numeroParadas'=> '5',
		  	'totalPasajeros'=> '5',
		  	'fechaTraslado'=> '01/01/01',
		  	'horaTraslado'=> '10:00',
	       
        ]);*/
    }
}
