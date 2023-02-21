<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
	use HasFactory;

	protected $fillable = [
		'title',
		'sub_title',
		'contents',
		'sample_num',
		'is_selling',
		'prefecture',
	];

	public function scopeSearchHospitals($query, $input = null)
	{
		if (!empty($input)) {
			// if (Hospital::where('title', 'like', $input . '%')
			// 	->orWhere('sub_title', 'like', $input . '%')->exists()
			// ) {
			// 	return $query->where('title', 'like', $input . '%')
			// 		->orWhere('sub_title', 'like', $input . '%');
			// }
			if (!empty($input)) {
				return $query->where('title', 'like', $input . '%');
			}
		}
	}
	// 都道府県絞り
	public function scopePrefecturesHospitals($query, $input = null)
	{
		if (!empty($input)) {
			return $query->where('prefecture', 'like', $input . '%');
		}
	}
}
