<?php

use Illuminate\Database\Seeder;

class RolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Rol::class, 10)->create();

        /*([
        	
	        'nombreRol' => 'Usuario Comun',
	        'descripcion' => 'Este rol solo puede realizar compras en la pagina, pero no puede realizar modificaciones en ella ni administrarla',
	       
        ]);*/
    }
}
