<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $permissions = [
            //........Roles........//
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            // our permissions
            'view-dashboard',
            'manage-properties',
            'manage-blog',
            'manage-categories',
            'manage-homeslider',
            'manage-features',
            'manage-messages',
            'manage-users',
            'manage-roles',
 
         ];
 
 
         foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
         }
    }
}
