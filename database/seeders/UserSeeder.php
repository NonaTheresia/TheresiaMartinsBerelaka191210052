<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Import class Hash

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
            [
                'name' => 'Theresia Martins Berelaka',
                'email' => 'theresia@gmail.com',
                'password' => Hash::make('password') // Gunakan Hash::make() untuk membuat hash password
            ],
       ]); 
    }   
}