<?php

use Illuminate\Database\Seeder;

class ActividadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         factory(App\Actividad::class, 10)->create();

         /*([
        	
		  	'nombreActividad'=> 'Treking',
		  	'precioActividad'=> '15000',
		  	'descripcion' => 'Subir el cerro Apoquindo y disfrutar de la naturaleza',
		  	'numeroNinos' => '3',
		  	'numeroAdultos'=> '2',
		  	'fechaInicio'=> '01/01/01',
		  	'horaInicio'=> '10:00',
		  	'fechaTermino'=> '12/12/12',
		  	'horaTermino'=> '18:00',
        ]);*/
    }
}
