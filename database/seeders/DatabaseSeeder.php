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
                'Email' => 'example@gmail.com',
                'Role' => 'User',
                'Password' => Hash::make('password'),
            ],
            [
                'Email' => 'admin@gmail.com',
                'Role' => 'Admin',
                'Password' => Hash::make('password'),
            ],
       ]
    );
    }
}
