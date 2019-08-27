<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Daniel',
            'documento' => '1105615169',
            'email' => 'admin@mail.co',
            'password' => bcrypt('admin123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('users')->insert([
            'name' => 'Camilo',
            'documento' => '6010104',
            'email' => 'dani@mail.co',
            'password' => bcrypt('admin123'),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
