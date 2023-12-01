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
        //
        $data = array(
            [
                'name'=> 'estefany',
                'email'=> 'estefany@gmail.com',
                'password'=> bcrypt('123456'),
                'created_at' => Carbon::now()
            ],


        );

        DB::table('users')->insert($data);
    }
}
