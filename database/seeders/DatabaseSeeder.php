<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
                'Password' => bcrypt('password'),
            ],
            [
                'Email' => 'admin@gmail.com',
                'Role' => 'Admin',
                'Password' => bcrypt('password'),
            ],
       ]
    );
    }
}
