<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTablesSeeder extends Seeder
{
	protected $table = 'usuario';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* Eloquent::unguard();
        $this->call('UsersTablesSeeder');*/
        User::create([
            'CPF' => '1234567',
            'email' => 'haha@gmail.com',
            'senha' => hash::make('senha')
        ]);
    }
}
