<?php

use Illuminate\Database\Seeder;

class HistorialusersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Historialuser::class, 10)->create();

        /*([
        	
	        'descripcion' => 'Usuario a seleccionado un vuelo para su compra',
		  	'fechaHistorial'=> '12/12/12',
		  	'horaHistorial'=> '10:00',
        ]);*/
    }
}
