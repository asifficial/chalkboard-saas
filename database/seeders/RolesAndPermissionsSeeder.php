<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $superAdmin = Role::firstOrCreate(['name' => 'Super Admin']);
        $tenantOwner = Role::firstOrCreate(['name' => 'Tenant Owner']);
        $schoolAdmin = Role::firstOrCreate(['name' => 'School Admin']);
        $branchAdmin = Role::firstOrCreate(['name' => 'Branch Admin']);
        $teacher = Role::firstOrCreate(['name' => 'Teacher']);
        $student = Role::firstOrCreate(['name' => 'Student']);
    }
}
