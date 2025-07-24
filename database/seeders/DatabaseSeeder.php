<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\SuperAdmin;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Test User',
            'email' => 'User@example.com',
            'password' => Hash::make('123456789'),
        ]);
           Admin::create([
            'name' => 'Test Admin',
            'email' => 'Admin@example.com',
            'password' => Hash::make('123456789'),
        ]);
           SuperAdmin::create([
            'name' => 'Test User',
            'email' => 'SuperAdmin@example.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
