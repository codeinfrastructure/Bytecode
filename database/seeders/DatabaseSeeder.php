<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Maak de gebruiker aan met kleine letters.
        // Je User model regelt zelf de hashing via 'password' => 'hashed' in casts().
        User::create([
            'name' => 'Admin',
            'email' => 'root@gmail.com',
            'password' => 'root', 
        ]);
    }
}
