<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $data = array(
            [
                'name_service'=> 'Alisados Argan',
                'timeframe'=> '2:00',
                'precio'=>25,
                'fk_category'=> 1,
                'created_at' => Carbon::now()
            ],
            [
                'name_service'=> 'Alisados Keratina',
                'timeframe'=> '2:00',
                'precio'=>25,
                'fk_category'=> 1,
                'created_at' => Carbon::now()
            ],
           

        );

        DB::table('service')->insert($data);
    }
}
