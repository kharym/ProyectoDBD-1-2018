<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create();

        /*([
        	
	        'name' => 'juan',
	        'email' => 'juanbrigido@gmail.com',
	        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
	        'dni_Pasaporte'=> '54862',
	        'fondos'=> '0125680',
	       
        ]);*/
    }
}
