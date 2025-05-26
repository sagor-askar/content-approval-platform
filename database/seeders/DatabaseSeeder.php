<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Mr. Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin@gmail.com'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Mr. User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user@gmail.com'),
            'role' => 'user'
        ]);
    }
}
