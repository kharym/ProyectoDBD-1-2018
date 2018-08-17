<?php

use Illuminate\Database\Seeder;

class UbicacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Ubicacione::class, 10)->create();


        /*([
        	
	        'ciudad'=>'Paris',
	        'pais'=> $faker->'Francia',
	        'calleUbicacion'=> 'Avenida Paris',
		  	'numeroUbicacion'=> '1348752',
		  	'codigoPostal'=>  '12219129929',
	       
        ]);*/
    }
}
 