<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $manager=User::create([
        	'name'=>'manager',
        	'username'=>'manager',
        	'email'=>'manager@manager.com',
        	'password'=>Hash::make('123456'),
            'image'=>'abc.jpg',
            'status'=>'1',
        	
        ]);
        $role=['role_id'=>1];

        $manager->role()->attach($role);

        $admin=User::create([
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>Hash::make('123456'),
            'image'=>'abc.jpg',
            'status'=>'1',
            
        ]);
        $role=['role_id'=>2];
        $admin->role()->attach($role);

        $employee=User::create([
            'name'=>'employee',
            'username'=>'employee',
            'email'=>'employee@employee.com',
            'password'=>Hash::make('123456'),
            'image'=>'abc.jpg',
            
        ]);
        $role=['role_id'=>3];
        $employee->role()->attach($role);
        $intern=User::create([
            'name'=>'intern',
            'username'=>'intern',
            'email'=>'intern@intern.com',
            'password'=>Hash::make('123456'),
            'image'=>'abc.jpg',
            
        ]);
        $role=['role_id'=>4];
        $intern->role()->attach($role);
        
    }
}
