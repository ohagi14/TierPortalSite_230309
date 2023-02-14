<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHospitalRequest;
use App\Http\Requests\UpdateHospitalRequest;
use App\Models\Hospital;
use Inertia\Inertia;

class HospitalController extends Controller
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

		return Inertia::render('Admin/Hospitals/Index', [
			'hospitals' => $hospitals,
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return Inertia::render('Admin/Hospitals/Create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Http\Requests\StoreHospitalRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreHospitalRequest $request)
	{
		Hospital::create([
			'title' => $request->title,
			'sub_title' => $request->sub_title,
			'contents' => $request->contents,
			'sample_num' => $request->sample_num,
		]);

		return to_route('hospitals.index')
			->with([
				'message' => '登録しました。',
				'status' => 'success',
			]);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Models\Hospital  $hospital
	 * @return \Illuminate\Http\Response
	 */
	public function show(Hospital $hospital)
	{
		// dd($hospital);
		return Inertia::render('Admin/Hospitals/Show', [
			'hospital' => $hospital,
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Models\Hospital  $hospital
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Hospital $hospital)
	{
		return Inertia::render('Admin/Hospitals/Edit', [
			'hospital' => $hospital,
		]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Http\Requests\UpdateHospitalRequest  $request
	 * @param  \App\Models\Hospital  $hospital
	 * @return \Illuminate\Http\Response
	 */
	public function update(UpdateHospitalRequest $request, Hospital $hospital)
	{
		// dd($hospital->title,$request->title);
		$hospital->title = $request->title;
		$hospital->sub_title = $request->sub_title;
		$hospital->contents = $request->contents;
		$hospital->sample_num = $request->sample_num;
		$hospital->is_selling = $request->is_selling;
		$hospital->save();

		return to_route('hospitals.index')
			->with([
				'message' => '更新しました。',
				'status' => 'update',
			]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Models\Hospital  $hospital
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Hospital $hospital)
	{
		$hospital->delete();

		return to_route('hospitals.index')
			->with([
				'message' => '削除しました。',
				'status' => 'danger',
			]);
	}
}
