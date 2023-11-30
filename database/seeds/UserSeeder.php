<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /*
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        // Access Level
        // 100 = Admin
        // 5 = Department Head
        // 1 = Dean of College
        // 0 = Student

        // DEFAULT
        \App\User::create([
            'username' => 'admin',
            'name' => 'Admin',
            'middlename' => ' ',
            'lastname' => 'Admin',
            'accesslevel' => 100,
            'email' => 'defaultadmin@gmail.com',
            'password' => bcrypt('admin'),
            'is_first_login' => 0
        ]);

        // ADMIN
        \App\User::create([
           'username' => 'admin@gmail.com',
           'name' => 'Admin',
           'middlename' => ' ',
           'lastname' => 'Admin',
           'accesslevel' => 100,
           'email' => 'superadmin@gmail.com',
           'password' => bcrypt('password1234'),
           'is_first_login' => 0
        ]);
        
        // DEPARTMENT HEAD
        \App\User::create([
            'username' => 'dep-head@pcu.edu.ph',
            'name' => 'Department Head',
            'middlename' => ' ',
            'lastname' => 'Head',
            'accesslevel' => 0,
            'email' => 'dep-head@gmail.com',
            'password' => bcrypt('password1234'),
            'is_first_login' => 0
        ]);

        // DEAN OF COLLEGES
        \App\User::create([
            'username' => 'dean@pcu.edu.ph',
            'name' => 'Dean of College',
            'middlename' => ' ',
            'lastname' => 'Dean',
            'accesslevel' => 1,
            'email' => 'dean@gmail.com',
            'password' => bcrypt('password1234'),
            'is_first_login' => 0
        ]);

        // STUDENT !!NOT WORKING!!
        \App\User::create([
            'username' => 'student@pcu.edu.ph',
            'name' => 'Student',
            'middlename' => ' ',
            'lastname' => 'Student',
            'accesslevel' => 0,
            'email' => 'student@gmail.com',
            'password' => bcrypt('password1234'),
            'is_first_login' => 0
        ]);
    }
}
