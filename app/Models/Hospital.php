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
	];

	public function scopeSearchHospitals($query, $input = null)
	{
		if (!empty($input)) {
			if (Hospital::where('title', 'like', $input . '%')
				->orWhere('sub_title', 'like', $input . '%')->exists()
			) {
				return $query->where('title', 'like', $input . '%');
			}
		}
	}
}
