<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;

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
				'title' => 'ノルド動物病院',
				'sub_title' => 'ドウブツビョウインタイトルイチ',
				'contents' => '詳細内容',
				'sample_num' => '100',
				'prefecture' => '北海道札幌市清田区北野3条3丁目1-1',
				'animal_category' => '1',
			],
			[
				'title' => '桑園動物病院',
				'sub_title' => 'ソウエンドウブツビョウイン',
				'contents' => '詳細内容',
				'sample_num' => '200',
				'prefecture' => '北海道札幌市中央区北8条西19丁目35番地10',
				'animal_category' => '1',
			],
			[
				'title' => 'ガーデン動物病院',
				'sub_title' => 'ガーデンドウブツビョウイン',
				'contents' => '詳細内容',
				'sample_num' => '110',
				'prefecture' => '北海道札幌市中央区北2条西25-2-1',
				'animal_category' => '1',
			],
			[
				'title' => '円山動物病院',
				'sub_title' => 'マルヤマドウブツビョウイン',
				'contents' => '詳細内容',
				'sample_num' => '110',
				'prefecture' => '北海道札幌市中央区宮の森2条13丁目12-21',
				'animal_category' => '1',
			],
			[
				'title' => '榎本犬猫病院',
				'sub_title' => 'エノモトイヌネコビョウイン',
				'contents' => '詳細内容',
				'sample_num' => '110',
				'prefecture' => '神奈川県相模原市緑区寸沢嵐848-1',
				'animal_category' => '2',
			],
		]);
	}
}
