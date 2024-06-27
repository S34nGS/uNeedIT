<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        // Create permissions
        Permission::create(['name' => 'view-user-submissions']);
        // Add more permissions as needed

        // Assign permissions to roles
        $adminRole = Role::where('name', 'admin')->first();
        $adminRole->givePermissionTo('view-user-submissions');
    }
}
