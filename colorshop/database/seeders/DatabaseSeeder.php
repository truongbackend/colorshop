<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory(10)->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '0390523958932',
            'roles' => '1',
            'street_address' => 'tran phu1111',
            'permission' => '1',
        ]);
    }
}
