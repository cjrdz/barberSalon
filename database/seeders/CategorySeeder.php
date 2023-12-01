<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = array(
            [
                'name_category'=> 'Alisados',
                'created_at' => Carbon::now()
            ],
            [
                'name_category'=> 'Cortes',
                'created_at' => Carbon::now()
            ],

        );

        DB::table('category')->insert($data);
    }
}
