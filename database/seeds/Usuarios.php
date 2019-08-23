<?php

use Illuminate\Database\Seeder;

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
            'password' => bcrypt('admin123')
        ]);
    }
}
