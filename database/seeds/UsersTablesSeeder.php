<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
	protected $table = 'tes.tusuario';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
			'CPF' =>  '06589384100',
			'email' => 'teste@gmail.com',
			'senha' => 'senha']);
    }
}
