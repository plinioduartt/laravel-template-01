<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin_role = Role::where('name', 'admin')->first();
        $customer_role  = Role::where('name', 'customer')->first();

        $user = new User();
        $user->name = 'Administrator';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt("123456"); 
        $user->save();  
        $user->roles()->attach($admin_role);

        $user = new User();
        $user->name = 'Customer';
        $user->email = 'customer@gmail.com';
        $user->password = bcrypt("123456"); 
        $user->save();  
        $user->roles()->attach($customer_role);

    }
}
