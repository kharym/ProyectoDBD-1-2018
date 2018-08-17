<?php

use Illuminate\Database\Seeder;

class ComprasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Compra::class, 10)->create();

        /*([
	        'descripcion' => 'Compra de un paquete con actividad para 2 personas',
		  	'monto'=> '400000',
		  	'fechaCompra'=> '01/01/01',
		  	'horaCompra'=> '10:00',
		  	
		]);*/
    }
}
