<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdmin = Role::firstOrCreate([
            'name' => 'Super Admin',
            'guard_name' => 'web',
        ]);

        $user = User::updateOrCreate(
            ['email' => 'admin@chalkboard.test'],
            [
                'name' => 'Super Admin',
                'password' => Hash::make('password'), // change in production
                'email_verified_at' => now(),
            ]
        );

        $user->assignRole($superAdmin);
    }
}
