<?php

use Illuminate\Database\Seeder;

class TablaCursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	factory(App\Curso::class, 100)->create();
    	//invoco a la clase factory y agrego 100 registros por el metodo create
    }
}
