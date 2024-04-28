<?php

namespace Database\Seeders;

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

        User::factory()->create([
            'name' => 'dhenny',
            'email' => 'dhen@gmail.com',
            'password'=>Hash::make('12345678'),
            'role'=>'admin',
        ]);

        User::factory()->create([
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password'=>Hash::make('87654321'),
            'role'=>'user',
        ]);
    }
}
