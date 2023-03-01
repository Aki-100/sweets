<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regions')->insert([
            'name' => 'Hokkaido',
            ]);
        DB::table('regions')->insert([
            'name' => 'Tohoku',
            ]);
        DB::table('regions')->insert([
            'name' => 'Kanto',
            ]);
        DB::table('regions')->insert([
            'name' => 'Chubu',
            ]);
        DB::table('regions')->insert([
            'name' => 'Kinki',
            ]);
        DB::table('regions')->insert([
            'name' => 'Chugoku',
            ]);
        DB::table('regions')->insert([
            'name' => 'Shikoku',
            ]);
        DB::table('regions')->insert([
            'name' => 'Kyushu / Okinawa',
            ]);
    }
}
