<?php

use Illuminate\Database\Seeder;

class AerolineasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Aerolinea::class, 10)->create();
        /*([
            'nombreAerolinea' => 'Latam',
    	  	'tipoAerolinea'=> '2',
    	  	'calificacion' => '4',
        ]);*/
    }
}
