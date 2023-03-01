<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class SweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sweets')->insert([
                'name' => 'Shiroi Koibito',
                'description' => 'This is very delicious !',
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR2dVgrhgpM4g_OH3tvkrlBnXZLvwbswYQZZE8IXw_g84-CZ7Lr27Ad_3geGxNAhkpJqcg&usqp=CAU',
                'user_id' => '1',
                'region_id' => '1',
                'prefecture_id' => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
        DB::table('sweets')->insert([
                'name' => 'Kininaru Ringo',
                'description' => 'This is very delicious !',
                'image_url' => 'http://web.hh-online.jp/g_images/h4170252/h4170252_FD1_01_pdm.jpg',
                'user_id' => '1',
                'region_id' => '2',
                'prefecture_id' => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
            DB::table('sweets')->insert([
                'name' => 'Nanbu Senbei',
                'description' => 'This is very delicious !',
                'image_url' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTdM6T5b8KIRZySO6SS0f-U0bwbNE46AXHqWg&usqp=CAU',
                'user_id' => '1',
                'region_id' => '2',
                'prefecture_id' => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
                DB::table('sweets')->insert([
                'name' => 'Hagino Tsuki',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1Ue7Y_jx7KM293QuvnS9LEJ-j7ZMxo598/view?usp=share_link',
                'user_id' => '1',
                'region_id' => '2',
                'prefecture_id' => '4',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
                DB::table('sweets')->insert([
                'name' => 'Namahageno Okurimono',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1yOhUtGn8nS6GZDUrvloep-rmcbZUawWI/view?usp=share_link',
                'user_id' => '1',
                'region_id' => '2',
                'prefecture_id' => '5',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
                DB::table('sweets')->insert([
                'name' => 'Noshiume',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/182ag9mHykuJMn_8AZW62QcJumDwQ6OE-/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '2',
                'prefecture_id' => '6',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
                DB::table('sweets')->insert([
                'name' => 'Remo',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1D_TLrhE6MuexDFNLPf2B0VnzlKIkLrLt/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '2',
                'prefecture_id' => '7',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Melon Baum Premium',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1wVnbi-qszPt1PqIz0AcIqXef9kkCSIcd/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '3',
                'prefecture_id' => '8',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Nikkou Kasutera',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1bwOAXOc_SpGyCkn1xXMsrEbSIWGgy6nI/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '3',
                'prefecture_id' => '9',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Kokuto Manju',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1-qXo7g3Q9bijnSZKRMm07Ja6h8ri6kcC/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '3',
                'prefecture_id' => '10',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Jumangoku Manju',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1IOgiKNdGHB_iXkS85OZtr5w_Bb7Mj1L2/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '3',
                'prefecture_id' => '11',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Peanuts Monaka',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1TLvFhQ3C_hy7I8FvIvbZXayKIBWegER1/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '3',
                'prefecture_id' => '12',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
                DB::table('sweets')->insert([
                'name' => 'Tokyo Banana',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1EPh71fxqkiV0RuBxR65dtisz1G4AFJ8H/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '3',
                'prefecture_id' => '13',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Yokohama Rengadori',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1jvK7wc3ypvxw7zdEHqf4LTPEwKheMZbW/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '3',
                'prefecture_id' => '14',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
                DB::table('sweets')->insert([
                'name' => 'Sasadanngo',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1HrtysGhJF5BZ5JKJ2DqYy_Jfj3L2lJV9/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '4',
                'prefecture_id' => '15',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
                DB::table('sweets')->insert([
                'name' => 'Kurehahashi Monaka',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1a1Ag0FU_UjAFsLdGEnCKHx1Tkbjsn7nn/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '4',
                'prefecture_id' => '16',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
                DB::table('sweets')->insert([
                'name' => 'Bangasa',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1B8uLywgCkmEGzPmbNcCBUn6nWgdZLzi6/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '4',
                'prefecture_id' => '17',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
        
                DB::table('sweets')->insert([
                'name' => 'Habutae Kurumi',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1dBlkToYwzJP9545Qnf5m4LSE9tCZSM4G/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '4',
                'prefecture_id' => '18',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Kurotama',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1UzQ96za_gzv5SjrQnNiZRyfE4Qy8G0Wj/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '4',
                'prefecture_id' => '19',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Ogura Toast Langue De Chat',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1jqNe6KAVthF0yTHumyovbMIHoGUZVFh5/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '4',
                'prefecture_id' => '20',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Gekokujo Ayu',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/12yS47pvbXJhDog69ev0C_AK_SPgT4Ot_/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '4',
                'prefecture_id' => '21',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Unagipai',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/18NEInFPlO7uzs06qXgm8bnO4orQd_WKV/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '4',
                'prefecture_id' => '22',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Kosenjo Monaka',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1rumowviKALWDb4SjjFVRWSVhHaz9XfTL/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '4',
                'prefecture_id' => '23',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Akahuku',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1AzQ8QJJzbu4kfA4DHvxo-3DtQfhp4jh_/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '5',
                'prefecture_id' => '24',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Taneya Monaka',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/16UaNvlhzJeqiBnmELv_nZzlh2rPwRS7L/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '5',
                'prefecture_id' => '25',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Kyobaum',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1OXoLGaq7kC3_F7quKveaQm1QeLRTW7Ea/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '5',
                'prefecture_id' => '26',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Tukigesyou',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1xi6jGWiuNKd2XI89M2_6BxKtw4uXf_Dp/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '5',
                'prefecture_id' => '27',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Arima Senbei',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1Fk-1XlT8fqn4hpplrVjTY_gyP2RBHYk4/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '5',
                'prefecture_id' => '28',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Daibutu Senbei',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1VHG88gT8HkRFwC9WYllU_RWdHMOoVr8X/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '5',
                'prefecture_id' => '29',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Ohinata Mikan Tart Cookie',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1G3lk_p0jT8BMi8RCBzoOYsObZvch8vcj/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '5',
                'prefecture_id' => '30',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Inabanoshirousagi',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1iwbzAWtma_UWOIr9Bqe__kNQF_maDz9v/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '6',
                'prefecture_id' => '31',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Wakakusa',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1wM1wSHc4MlHs8s5ZAOEIxspu5wVwU2M4/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '6',
                'prefecture_id' => '32',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Kibidango',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1yp1CzKfAfZHtnJfRTD5BBXqz5PyDzGKl/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '6',
                'prefecture_id' => '33',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Momiji Manju',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1iMa8rBk4bd2yihnV-Ip6nyK_WEpWng-X/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '6',
                'prefecture_id' => '34',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Rikyu Manju',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1zLrsX9D_tMBF8erH5UodAPbIyTtYX1a_/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '6',
                'prefecture_id' => '35',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Sudati Candy',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1q9LoTF_rgXkxF1VOqMVZJr7x5xviSywZ/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '7',
                'prefecture_id' => '36',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Samukiudonhu Gumi',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1VMHmVa6hrm2PFBRe_pfAhYsepA4_Lew1/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '7',
                'prefecture_id' => '37',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Marugoto Mikan Daihuku',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1KHXkZZ7OcyGqcI53X7-dUO5nqtbzJ3Oz/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '7',
                'prefecture_id' => '38',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Ryoumadensetu Yuzupai',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1jjHY0KzWmwFmYDaa1XvgglKcMTH2fkrd/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '7',
                'prefecture_id' => '39',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Menbei',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1KXRQifidCN7ifOCwMUtpWytQTpnRz9_s/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '8',
                'prefecture_id' => '40',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Saganishiki',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1obMohPgsRi0N1_OALgCtWbwOqhRvSh93/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '8',
                'prefecture_id' => '41',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Nagasaki Kasutera',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1HSyvGjlS_TUt8COes8lRzfRwQhYZahSN/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '8',
                'prefecture_id' => '42',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Yuzumoe',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1iXM2kHdYBampjEfXasnc9XRDWmGzfPdO/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '8',
                'prefecture_id' => '43',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Zabieru',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1EcSNTcHPKOVwnP_JCzlPDpTtrGcksID0/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '8',
                'prefecture_id' => '44',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Miyazakimango Langue De Chat',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1zlWfTpVn9en8TvF3HVzKw6HS0MIfEb8O/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '8',
                'prefecture_id' => '45',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Satsumaimo Tart',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/1YMCjuXGQ2Ck0vfguRD1-KK1W9UAfmp07/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '8',
                'prefecture_id' => '46',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);

                DB::table('sweets')->insert([
                'name' => 'Yukishio Sando',
                'description' => 'This is very delicious !',
                'image_url' => 'https://drive.google.com/file/d/18-kZe31LJYaq4SgKjd6v79FBu6qoHPrG/view?usp=sharing',
                'user_id' => '1',
                'region_id' => '8',
                'prefecture_id' => '47',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
        ]);
    }
}
