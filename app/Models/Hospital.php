<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AnimalCategory;

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
		'animal_category',
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
			$query = $query->where(function ($query) use ($input) {
				foreach ($input as $value) {
					$query->orWhere('prefecture', 'like', '%' . $value . '%');
				}
			});
		}
		return $query;
	}

	//動物カテゴリー関連 紐付け
	public function categories()
	{
		return $this->belongsToMany(AnimalCategory::class);
	}
}
