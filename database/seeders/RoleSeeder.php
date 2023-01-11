<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // permissions user
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'read user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);
        //permissions client
        Permission::create(['name' => 'create customer']);
        Permission::create(['name' => 'read customer']);
        Permission::create(['name' => 'update customer']);
        Permission::create(['name' => 'delete customer']);
        // permissions movie
        Permission::create(['name' => 'create movie']);
        Permission::create(['name' => 'read movie']);
        Permission::create(['name' => 'update movie']);
        Permission::create(['name' => 'delete movie']);
        // permissions rent
        Permission::create(['name' => 'create rent']);
        Permission::create(['name' => 'read rent']);
        Permission::create(['name' => 'update rent']);
        Permission::create(['name' => 'delete rent']);

        // create Rol
        Role::create(['name' => 'admin'])->givePermissionTo(Permission::all());
        Role::create(['name' => 'manager'])->givePermissionTo([
            'create customer',
            'read customer',
            'update customer',
            'delete customer',
            'create movie',
            'read movie',
            'update movie',
            'delete movie',
            'create rent',
            'read rent',
            'update rent',
            'delete rent'
        ]);
    }
}
