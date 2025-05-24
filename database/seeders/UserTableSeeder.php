<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run(): void
    {
        DB::table('users')->insert([
            // admin:
            [
                'name'=> 'Admin',
                'username'=> 'admin',
                'email' => 'ClickWeb@gmail.com',
                'password' => Hash::make('ClickWeb'),
                'role'=> 'admin',
                'status'=>'active',
            ],

            // user:
            [
                'name'=> 'User',
                'username'=> 'user',
                'email' => 'user@gmail.com',
                'password' => Hash::make('1227'),
                'role'=> 'user',
                'status'=>'active',
            ],
            [
                'name'=> 'User',
                'username'=> 'user',
                'email' => 'oussama12as@gmail.com',
                'password' => Hash::make('1227'),
                'role'=> 'user',
                'status'=>'active',
            ],
        ]);
    }
}
