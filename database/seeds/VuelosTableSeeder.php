<?php

use Illuminate\Database\Seeder;

class VuelosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Vuelo::class, 10)->create();

        /*([
        	
	        'tipoVuelo'=> '2',
	        'precioVuelo'=> '250000',
	        'numeroEscala'=> '2',
	        'cantidadEquipaje'=> '1',
		  	'fechaPartida'=> '01/01/01',
		  	'horaPartida'=> '10:00',
		  	'fechaRegreso'=> '12/12/12',
		  	'horaRegreso'=> '18:00',
	       
        ]);*/
    }
}
