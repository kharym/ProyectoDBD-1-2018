<?php

use Illuminate\Database\Seeder;

class HabitacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Habitacione::class, 10)->create();

        /*([
        	
		  	'precioHabitacion'=> '250000',
		  	'calificacion'=> '4',
		  	'numeroAdultos'=> '2',
		  	'numeroNinos' => '2',
		  	'tipoHabitacion' => '1',
		  	'fechaIngreso'=> '01/01/01',
		  	'horaIngreso'=> '10:00',
		  	'fechaSalida'=> '12/12/12',
		  	'horaSalida'=> '18:00',
        ]);*/
    }
}

	  	