<?php

use Illuminate\Database\Seeder;

class AutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Auto::class, 10)->create();

    	/*([
	        'patente' => 'XXXX-23',
		  	'precio'=> '450000',
		  	'marca' => 'nissan',
		  	'modelo' => 'march sport',
		  	'fechaArriendo'=> '01/01/01',
		  	'horaArriendo'=> '10:00',
		  	'fechaDevolucion'=> '12/12/12',
		  	'horaDevolucion'=> '18:00',
		]);*/
    }
}
