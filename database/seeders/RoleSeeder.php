<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=Role::create([
        		'roleName'=>'manager',
                'slug'=>'manager',
                'permissions'=>'{"manager":true}',
        	]);
        $user=Role::create([
        		'roleName'=>'admin',
                'slug'=>'seller',
                'permissions'=>'{"admin":true}',
        	]);
         $user=Role::create([
        		'roleName'=>'employee',
                'slug'=>'employee',
                'permissions'=>'{"employee":true}',
        	]);
        $user=Role::create([
        		'roleName'=>'intern',
                'slug'=>'intern',
                'permissions'=>'{"intern":true}',
        	]);
    }
}
