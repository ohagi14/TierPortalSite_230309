<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHospitalRequest;
use App\Http\Requests\UpdateHospitalRequest;
use App\Models\Hospital;
use Inertia\Inertia;

class FrontHospitalController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		// $g = Hospital::select('id', 'title', 'sample_num', 'is_selling')->get();
		// $gt = Hospital::select('id', 'title', 'sample_num', 'is_selling')->paginate(2);
		// dd($g,$gt);

		$hospitals = Hospital::searchHospitals()
			->select('id', 'title', 'sample_num', 'is_selling')->paginate(50);
		// dd($hospitals);

		return Inertia::render('Front/Hospital/Index', [
			'hospitals' => $hospitals,
		]);

	}
}
