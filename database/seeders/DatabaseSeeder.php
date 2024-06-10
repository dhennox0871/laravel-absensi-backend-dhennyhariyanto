<?php

namespace Database\Seeders;

use App\Models\Company;
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
        //User::factory(10)->create();

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

        Company::factory()->create([
            'name'=>'density',
            'address'=>'mulyosari tengah vii no 48',
            'phone'=>'087877900871',
            'longitude'=>'7.006',
            'latitude'=>'12.000',
            'time_in'=>'08:00 AM',
            'time_out'=>'17:00 PM',
            'radius_km'=>'1'
        ]);


    }
}
