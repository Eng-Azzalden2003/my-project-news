<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\FashionHead;
use App\Models\FashionWriter;
use App\Models\SportHead;
use App\Models\SportWriter;
use App\Models\SuperAdmin;
use App\Models\User;
use App\Models\WorldHead;
use App\Models\WorldWriter;
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
            'name' => 'Test Admin',
            'email' => 'Admin@example.com',
            'password' => Hash::make('123456789'),
        ]);
        SuperAdmin::create([
            'name' => 'Test User',
            'email' => 'SuperAdmin@example.com',
            'password' => Hash::make('123456789'),
        ]);
        WorldHead::create([
            'name' => 'Test WorldHead',
            'email' => 'WorldHead@example.com',
            'password' => Hash::make('123456789'),
        ]);
        WorldWriter::create([
            'name' => 'Test WorldWriter',
            'email' => 'WorldWriter@example.com',
            'password' => Hash::make('123456789'),
        ]);
        SportHead::create([
            'name' => 'Test SportHead',
            'email' => 'SportHead@example.com',
            'password' => Hash::make('123456789'),
        ]);
        SportWriter::create([
            'name' => 'Test SportWriter',
            'email' => 'SportWriter@example.com',
            'password' => Hash::make('123456789'),
        ]);
        FashionHead::create([
            'name' => 'Test FashionHead',
            'email' => 'FashionHead@example.com',
            'password' => Hash::make('123456789'),
        ]);
        FashionWriter::create([
            'name' => 'Test FashionWriter',
            'email' => 'FashionWriter@example.com',
            'password' => Hash::make('123456789'),
        ]);
    }
}
