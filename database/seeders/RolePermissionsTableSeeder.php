<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create articles']);
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // create roles and assign existing permissions
        $writer = Role::create(['name' => 'writer']);

        $writer->givePermissionTo('create articles');
        $writer->givePermissionTo('edit articles');
        $writer->givePermissionTo('delete articles');

        $admin = Role::create(['name' => 'admin']);
        
        $admin->givePermissionTo('publish articles');
        $admin->givePermissionTo('unpublish articles');
        $admin->givePermissionTo('create articles');
        $admin->givePermissionTo('edit articles');
        $admin->givePermissionTo('delete articles');
    }
}
