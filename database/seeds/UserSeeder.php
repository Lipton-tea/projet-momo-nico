<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds. 
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name" => "Nico",
            "email" => "nico@gmail.com",
            "password" => "motDePasse",
            "created_at" => now()

        ]);
        DB::table('users')->insert([
            "name" => "Momo",
            "email" => "momo@gmail.com",
            "password" => "motDePasse",
            "created_at" => now()

        ]);
    }
}
