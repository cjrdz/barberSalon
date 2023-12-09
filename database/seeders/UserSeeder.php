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
        $clientRoleId = DB::table('roles')->insertGetId(['name' => 'admin']);
        $employeeRoleId = DB::table('roles')->insertGetId(['name' => 'employee']);
        $adminRoleId = DB::table('roles')->insertGetId(['name' => 'client']);

        $data = [
            [
                'name' => 'estefany',
                'email' => 'estefany@gmail.com',
                'password' => bcrypt('123456'),
                'role_id' => $clientRoleId,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'employee_user',
                'email' => 'employee@example.com',
                'password' => bcrypt('password'),
                'role_id' => $employeeRoleId,
                'created_at' => Carbon::now(),
            ],
            [
                'name' => 'admin_user',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'role_id' => $adminRoleId,
                'created_at' => Carbon::now(),
            ],
            // Add more user data as needed
        ];

        DB::table('users')->insert($data);
    }
}
