<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seed roles
        $this->call(RoleSeeder::class);
        
        // Seed roles for users
        $adminRoleId = DB::table('roles')->where('role_name', 'admin')->value('id');
        $employeeRoleId = DB::table('roles')->where('role_name', 'employee')->value('id');
        $clientRoleId = DB::table('roles')->where('role_name', 'client')->value('id');

        $data = [
            [
                'name' => 'estefany',
                'email' => 'estefany@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => $adminRoleId,
                'role_name' => 'admin',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'employee_user',
                'email' => 'employee@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => $employeeRoleId,
                'role_name' => 'employee',
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'client_user',
                'email' => 'client@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => $clientRoleId,
                'role_name' => 'client',
                'created_at' => Carbon::now(),
            ],
            // Add more user data as needed
        ];

        DB::table('users')->insert($data);
    }
}
