<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /************************** Admin **************************/
        Permission::create(['name' => 'Create-Role', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Read-Roles', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Update-Role', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Delete-Role', 'guard_name' => 'admin']);

        Permission::create(['name' => 'Create-Permission', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Read-Permissions', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Update-Permission', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Delete-Permission', 'guard_name' => 'admin']);

        Permission::create(['name' => 'Create-Admin', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Read-Admins', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Update-Admin', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Delete-Admin', 'guard_name' => 'admin']);

        Permission::create(['name' => 'Create-Client', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Read-Clients', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Update-Client', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Delete-Client', 'guard_name' => 'admin']);

        Permission::create(['name' => 'Create-Membership', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Read-Memberships', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Update-Membership', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Delete-Membership', 'guard_name' => 'admin']);

        Permission::create(['name' => 'Create-Invoice', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Read-Invoices', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Update-Invoice', 'guard_name' => 'admin']);
        Permission::create(['name' => 'Delete-Invoice', 'guard_name' => 'admin']);

        /************************** client **************************/
        Permission::create(['name' => 'Create-Role', 'guard_name' => 'client']);
        Permission::create(['name' => 'Read-Roles', 'guard_name' => 'client']);
        Permission::create(['name' => 'Update-Role', 'guard_name' => 'client']);
        Permission::create(['name' => 'Delete-Role', 'guard_name' => 'client']);

        Permission::create(['name' => 'Create-Permission', 'guard_name' => 'client']);
        Permission::create(['name' => 'Read-Permissions', 'guard_name' => 'client']);
        Permission::create(['name' => 'Update-Permission', 'guard_name' => 'client']);
        Permission::create(['name' => 'Delete-Permission', 'guard_name' => 'client']);

        Permission::create(['name' => 'Create-Admin', 'guard_name' => 'client']);
        Permission::create(['name' => 'Read-Admins', 'guard_name' => 'client']);
        Permission::create(['name' => 'Update-Admin', 'guard_name' => 'client']);
        Permission::create(['name' => 'Delete-Admin', 'guard_name' => 'client']);
        
        Permission::create(['name' => 'Create-Client', 'guard_name' => 'client']);
        Permission::create(['name' => 'Read-Clients', 'guard_name' => 'client']);
        Permission::create(['name' => 'Update-Client', 'guard_name' => 'client']);
        Permission::create(['name' => 'Delete-Client', 'guard_name' => 'client']);

        Permission::create(['name' => 'Create-Membership', 'guard_name' => 'client']);
        Permission::create(['name' => 'Read-Memberships', 'guard_name' => 'client']);
        Permission::create(['name' => 'Update-Membership', 'guard_name' => 'client']);
        Permission::create(['name' => 'Delete-Membership', 'guard_name' => 'client']);

        Permission::create(['name' => 'Create-Invoice', 'guard_name' => 'client']);
        Permission::create(['name' => 'Read-Invoices', 'guard_name' => 'client']);
        Permission::create(['name' => 'Update-Invoice', 'guard_name' => 'client']);
        Permission::create(['name' => 'Delete-Invoice', 'guard_name' => 'client']);

    }
}
