<?php

namespace modules\LMS\Course\Database\Seeds;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::findOrCreate('manage categories');
        Permission::findOrCreate('manage role_permissions');
        Permission::findOrCreate('teach');

        Role::findOrCreate('teacher')->givePermissionTo(['teach']);
    }
}
