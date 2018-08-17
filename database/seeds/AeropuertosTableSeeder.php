<?php

use Illuminate\Database\Seeder;

class AeropuertosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Aeropuerto::class, 10)->create();

        /*([
            'nombreAeropuerto' => 'Aeropuerto Internacional de Santiago',
    	  	'tipoAeropuerto'=> '2',
    	  	'calificacion' => '3',
        ]);*/
    }
}
