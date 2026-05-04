<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::firstOrCreate(
            ['username' => 'admin'],
            [
                'name' => 'Administrator',
                'password' => Hash::make('123456'),
                'role' => 1
            ]
        );
        
        User::firstOrCreate(
            ['username' => 'user'],
            [
                'name' => 'Demo User',
                'password' => Hash::make('123456'),
                'role' => 0
            ]
        );
    }
}
