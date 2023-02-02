<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->insert([
            [
                'title' => '動物病院タイトル１',
                'sub_title' => 'ドウブツビョウインタイトルイチ',
                'contents' => '詳細内容',
                'sample_num' => '100',
            ],
            [
                'title' => '動物病院タイトル2',
                'sub_title' => 'ドウブツビョウインタイトルニ',
                'contents' => '詳細内容',
                'sample_num' => '200',
            ],
            [
                'title' => '動物病院タイトル３',
                'sub_title' => 'ドウブツビョウインタイトルサン',
                'contents' => '詳細内容',
                'sample_num' => '110',
            ],
            [
                'title' => '動物病院サンプル',
                'sub_title' => 'ドウブツビョウインサンプル',
                'contents' => '詳細内容',
                'sample_num' => '110',
            ]
        ]);
    }
}
