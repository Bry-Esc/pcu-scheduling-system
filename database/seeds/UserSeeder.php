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
            'username' => 'dep-head@gmail.com',
            'name' => 'Department Head',
            'middlename' => ' ',
            'lastname' => 'Head',
            'accesslevel' => 1,
            'email' => 'dep-head@gmail.com',
            'password' => bcrypt('password1234'),
            'is_first_login' => 0
        ]);

        // DEAN OF COLLEGES
        \App\User::create([
            'username' => 'dean@gmail.com',
            'name' => 'Dean of Colleges',
            'middlename' => ' ',
            'lastname' => 'Dean',
            'accesslevel' => 0,
            'email' => 'dean@gmail.com',
            'password' => bcrypt('password1234'),
            'is_first_login' => 0
        ]);

        // DEAN OF COLLEGES
        \App\User::create([
            'username' => 'student@gmail.com',
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
