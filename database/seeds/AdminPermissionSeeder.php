<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminPermissionSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create(['name' => 'admin']);
        $manageUserPermission = Permission::create(['name' => 'manage user']);

        $adminRole->syncPermissions([
            $manageUserPermission,
        ]);
    }
}
