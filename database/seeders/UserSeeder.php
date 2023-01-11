<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create user admin
        $user = User::create([
            'name' => 'Administrador',
            'user_name' => 'Admin',
            'email' => 'admin@styde.net',
            'password' => bcrypt('prueba123')
        ]);
        // Role assignment
        $user->assignRole('admin');
    }
}
