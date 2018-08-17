<?php

use Illuminate\Database\Seeder;

class ProveedorTrasladosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProveedorTraslado::class, 10)->create();

        /*([
        	
	        'nombreProveedorTraslado' => 'Agencia de traslados pepito',
	        'telefono' => '+56912634287',
	        'correo' => 'trasladospepito@gmail.com',
        ]);*/
    }
}
