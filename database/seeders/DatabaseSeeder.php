<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Create roles first (if they don't exist)
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Create admin user
        $adminUser = User::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@profoundrealtors.com',
            'password' => Hash::make('password123'),
            'phone' => '1234567890',
        ]);

        // Attach admin role to user
        $adminUser->roles()->attach($adminRole->id);
    }
}
