<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//esta funcion genera automaticante los registros
        factory(App\User::class)->create([

        	'name'		=> 	'Fulanito de Tal',
        	'email'		=>	'fulanito@detal.com',
        	'password'	=>	bcrypt('123456')
        	]);
        factory(App\User::class, 150)->create(); //creo 50 usuarios por el metodo create
    }
}
