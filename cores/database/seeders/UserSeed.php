<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Waiter',
            'email' => 'back@mail.com',
            'status' => 'waiter',
            'password' => bcrypt('12345678'),
        	'email_verified_at' => \Carbon\Carbon::now(),
        ]);

        \DB::table('users')->insert([
            'name' => 'Cashier',
            'email' => 'front@mail.com',
            'status' => 'cashier',
            'password' => bcrypt('12345678'),
        	'email_verified_at' => \Carbon\Carbon::now(),
        ]);
    }
}
