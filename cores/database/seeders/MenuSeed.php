<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('menus')->insert([
            'name' => 'Fried Rice',
            'stock' => '10',
            'price' => '20000',
            'status' => 'active',
        ]);

        \DB::table('menus')->insert([
            'name' => 'French Rice',
            'stock' => '20',
            'price' => '15000',
            'status' => 'active',
        ]);
    }
}
