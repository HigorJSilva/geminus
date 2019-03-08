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
            'CPF' => '12345678912',
            'email' => 'rafael.cirqueira@outlook.com',
            'password' => hash::make('senha')
        ]);
    }
}
