<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            [
                'title' => 'Profile Title',
                'description' => 'Selamat datang di website profile saya',
                'image' => 'image.jpg',
                'name' => 'Theresia Martins Berelaka',
                'email' => 'theresia.berelaka@gmail.com',
                'role' => '1',
                'phone' => '6282139931233',
                'is_active' => '1',
            ],
        ]);
    }
}