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
		'prefecture',
		'sample_num',
		'is_selling',
	];

	public function scopeSearchHospitals($query, $input = null)
	{
		if (!empty($input)) {
			if (Hospital::where('title', 'like', '%' . $input . '%')->exists()) {
				return $query->where('title', 'like', '%' . $input . '%');
			}
			return $query->where('title', 'like', '%' . $input . '%');
		}
	}
	// 都道府県絞り
	public function scopePrefecturesHospitals($query, $input = null)
	{
		if (!empty($input)) {
			if (Hospital::whereIn('prefecture', $input)->exists()) {
				return $query->whereIn('prefecture', $input);
			}
			return $query->whereIn('prefecture', $input);
		}
	}
}
