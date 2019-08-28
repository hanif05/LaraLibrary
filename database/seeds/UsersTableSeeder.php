<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([

        	'name' => 'Ucok Udin',
        	'password' => bcrypt('password'),
        	'email' => 'ucok@udin.com',
            'email_verified_at' => now(),
        	'role' => 0
        ]);
    }
}
