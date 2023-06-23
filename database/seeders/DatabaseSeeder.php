<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::insert([
            [
                'email' => 'example@gmail.com',
                'role' => 'User',
                'password' => Hash::make('password'),
            ],
            [
                'email' => 'admin@gmail.com',
                'role' => 'Admin',
                'password' => Hash::make('password'),
            ],
       ]
    );
    }
}
