<?php

use Illuminate\Database\Seeder;

class HistorialcomprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        factory(App\Historialcompra::class, 10)->create();

        /*([
        	
	        'fechaCompra'=> '01/01/01',
		  	'horaCompra'=> '10:00',
		  	'tipoCompra' => '2',
		  	'metodoDePago'=> '3',
		  	'monto'=> '500000',
		  	'descripcion'=> 'se ha comprado 1 paquete con avion + alojamiento + habitacion por un total de 500000',
        ]);*/
    }
}
