<?php

use Illuminate\Database\Seeder;

class ProveedorAutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProveedorAuto::class, 10)->create();

        /*([
        	
	        'nombreProveedorAuto' => 'ArriendoAutos',
	        'telefono' => '+56945685287',
	        'correo' => 'arriendoautos@gmail.com',
        ]);*/
    }
}
