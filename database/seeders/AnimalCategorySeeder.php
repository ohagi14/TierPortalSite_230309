<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AnimalCategorySeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('animal_categories')->insert([
			[
				'name'=>'犬',
				'sort_order'=>'1',
			],
			[
				'name'=>'猫',
				'sort_order'=>'2',
			],
			[
				'name'=>'うさぎ',
				'sort_order'=>'3',
			],
			[
				'name'=>'ハムスター',
				'sort_order'=>'4',
			],
		]);
	}
}
