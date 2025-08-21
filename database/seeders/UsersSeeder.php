<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin BCL',
            'email' => 'admin@bcl.com',
            'password' => Hash::make('Admin123!'),
            'role' => 'Admin',
            'nohp' => '081234567890',
        ]);
        User::create([
            'name' => 'Driver',
            'email' => 'driver@bcl.com',
            'password' => Hash::make('Driver123!'),
            'role' => 'Driver',
            'nohp' => '081234567891',
        ]);
        User::create([
            'name' => 'User A',
            'email' => 'user@bcl.com',
            'password' => Hash::make('User123!'),
            'role' => 'User',
            'nohp' => '081234567893',
        ]);


    }
}
