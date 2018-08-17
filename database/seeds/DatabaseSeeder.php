<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	ProveedorAutosTableSeeder::class,
        	ProveedorTrasladosTableSeeder::class,
        	PaquetesTableSeeder::class,
        	AerolineasTableSeeder::class,
        	UbicacionesTableSeeder::class,
        	HistorialusersTableSeeder::class,
        	RolsTableSeeder::class,
        	UsersTableSeeder::class,
        	ComprasTableSeeder::class,
        	AutosTableSeeder::class,
	        ActividadsTableSeeder::class,
	        HistorialcomprasTableSeeder::class,
	        AlojamientosTableSeeder::class,
	        HabitacionesTableSeeder::class,
	        TrasladosTableSeeder::class,
			AeropuertosTableSeeder::class,
			VuelosTableSeeder::class,
			AsientosTableSeeder::class,
			
	    ]);
    }
}
