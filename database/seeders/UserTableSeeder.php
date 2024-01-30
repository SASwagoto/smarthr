<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Supar',
            'last_name' => 'Admin',
            'employee_id' => '001',
            'email' => 'admin@hrms.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), // 12345678
        ])->assignRole('Super-Admin');

        User::create([
            'first_name' => 'HR',
            'last_name' => 'Manager',
            'employee_id' => '002',
            'email' => 'hrmanager@hrms.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), // 12345678
        ])->assignRole('HR-Manager');

        User::create([
            'first_name' => 'Accounts',
            'last_name' => 'Manager',
            'employee_id' => '003',
            'email' => 'accmanager@hrms.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), // 12345678
        ])->assignRole('Accounts-Manager');

        User::create([
            'first_name' => 'Imran',
            'last_name' => 'Hossain',
            'employee_id' => '101',
            'email' => 'imran@hrms.com',
            'email_verified_at' => now(),
            'password' => bcrypt(12345678), // 12345678
        ])->assignRole('Employee');
    }
}
