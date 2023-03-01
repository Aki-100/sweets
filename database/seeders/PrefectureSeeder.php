<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PrefectureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefectures')->insert([
                'region_id' => 1,
                'name' => 'Hokkaido',
            ]); //1
        DB::table('prefectures')->insert([
                'region_id' => 2,
                'name' => 'Aomori',
            ]); //2
        DB::table('prefectures')->insert([
                'region_id' => 2,
                'name' => 'Iwate',
            ]); //3
        DB::table('prefectures')->insert([
                'region_id' => 2,
                'name' => 'Miyagi',
            ]); //4
        DB::table('prefectures')->insert([
                'region_id' => 2,
                'name' => 'Akita',
            ]); //5
        DB::table('prefectures')->insert([
                'region_id' => 2,
                'name' => 'Yamagata',
            ]); //6
        DB::table('prefectures')->insert([
                'region_id' => 2,
                'name' => 'Fukushima',
            ]); //7
        DB::table('prefectures')->insert([
                'region_id' => 3,
                'name' => 'Ibaraki',
            ]); //8
        DB::table('prefectures')->insert([
                'region_id' => 3,
                'name' => 'Tochigi',
            ]);//9
        DB::table('prefectures')->insert([
                'region_id' => 3,
                'name' => 'Gunma',
            ]);//10
        DB::table('prefectures')->insert([
                'region_id' => 3,
                'name' => 'Saitama',
            ]);//11
        DB::table('prefectures')->insert([
                'region_id' => 3,
                'name' => 'Chiba',
            ]);//12
        DB::table('prefectures')->insert([
                'region_id' => 3,
                'name' => 'Tokyo',
            ]);//13
        DB::table('prefectures')->insert([
                'region_id' => 3,
                'name' => 'Kanagawa',
            ]);//14
        DB::table('prefectures')->insert([
                'region_id' => 4,
                'name' => 'Niigata',
            ]);//15
        DB::table('prefectures')->insert([
                'region_id' => 4,
                'name' => 'Toyama',
            ]);//16
        DB::table('prefectures')->insert([
                'region_id' => 4,
                'name' => 'Ishikawa',
            ]);//17
        DB::table('prefectures')->insert([
                'region_id' => 4,
                'name' => 'Fukui',
            ]);//18
        DB::table('prefectures')->insert([
                'region_id' => 4,
                'name' => 'Yamanashi',
            ]);//19
        DB::table('prefectures')->insert([
                'region_id' => 4,
                'name' => 'Nagano',
            ]);//20
        DB::table('prefectures')->insert([
                'region_id' => 4,
                'name' => 'Gifu',
            ]);//21
        DB::table('prefectures')->insert([
                'region_id' => 4,
                'name' => 'Shizuoka',
            ]);//22
        DB::table('prefectures')->insert([
                'region_id' => 4,
                'name' => 'Aichi',
            ]);//23
        DB::table('prefectures')->insert([
                'region_id' => 5,
                'name' => 'Mie',
            ]);//24
        DB::table('prefectures')->insert([
                'region_id' => 5,
                'name' => 'Shiga',
            ]);//25
        DB::table('prefectures')->insert([
                'region_id' => 5,
                'name' => 'Kyoto',
            ]);//26
        DB::table('prefectures')->insert([
                'region_id' => 5,
                'name' => 'Osaka',
            ]);//27
        DB::table('prefectures')->insert([
                'region_id' => 5,
                'name' => 'Hyogo',
            ]);//28
        DB::table('prefectures')->insert([
                'region_id' => 5,
                'name' => 'Nara',
            ]);//29
        DB::table('prefectures')->insert([
                'region_id' => 5,
                'name' => 'Wakayama',
            ]);//30
        DB::table('prefectures')->insert([
                'region_id' => 6,
                'name' => 'Tottori',
            ]);//31
        DB::table('prefectures')->insert([
                'region_id' => 6,
                'name' => 'Shimane',
            ]);//32
        DB::table('prefectures')->insert([
                'region_id' => 6,
                'name' => 'Okayama',
            ]);//33
        DB::table('prefectures')->insert([
                'region_id' => 6,
                'name' => 'Hiroshima',
            ]);//34
        DB::table('prefectures')->insert([
                'region_id' => 6,
                'name' => 'Yamaguchi',
            ]);//35
        DB::table('prefectures')->insert([
                'region_id' => 7,
                'name' => 'Tokushima',
            ]);//36
        DB::table('prefectures')->insert([
                'region_id' => 7,
                'name' => 'Kagawa',
            ]);//37
        DB::table('prefectures')->insert([
                'region_id' => 7,
                'name' => 'Ehime',
            ]);//38
        DB::table('prefectures')->insert([
                'region_id' => 7,
                'name' => 'Kochi',
            ]);//39
        DB::table('prefectures')->insert([
                'region_id' => 8,
                'name' => 'Fukuoka',
            ]);//40
        DB::table('prefectures')->insert([
                'region_id' => 8,
                'name' => 'Saga',
            ]);//41
        DB::table('prefectures')->insert([
                'region_id' => 8,
                'name' => 'Nagasaki',
            ]);//42
        DB::table('prefectures')->insert([
                'region_id' => 8,
                'name' => 'Kumamoto',
            ]);//43
        DB::table('prefectures')->insert([
                'region_id' => 8,
                'name' => 'Oita',
            ]);//44
        DB::table('prefectures')->insert([
                'region_id' => 8,
                'name' => 'Miyazaki',
            ]);//45
        DB::table('prefectures')->insert([
                'region_id' => 8,
                'name' => 'Kagoshima',
            ]);//46
        DB::table('prefectures')->insert([
                'region_id' => 8,
                'name' => 'Okinawa',
            ]);//47
    }
}
