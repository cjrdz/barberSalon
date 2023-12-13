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
        // Seed roles for users
        $adminRoleId = DB::table('roles')->insertGetId(['role_name' => 'admin']);
        $employeeRoleId = DB::table('roles')->insertGetId(['role_name' => 'employee']);
        $clientRoleId = DB::table('roles')->insertGetId(['role_name' => 'client']);

        $data = [
            [
                'name' => 'estefany',
                'email' => 'estefany@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => $adminRoleId,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'employee_user',
                'email' => 'employee@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => $employeeRoleId,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'client_user',
                'email' => 'client@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => $clientRoleId,
                'created_at' => Carbon::now(),
            ],
            // Add more user data as needed
        ];

        DB::table('users')->insert($data);
    }
}
