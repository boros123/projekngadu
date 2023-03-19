<?php

namespace Database\Seeders;

use App\Models\Pengguna;
use App\Models\Petugas;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'admin',
            'username' => 'admin1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10) ,
            
       
        ]);

        Petugas::create([
            'name' => 'petugas',
            'username' => 'petugas1',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10) ,
            
       
        ]);




    }
}
