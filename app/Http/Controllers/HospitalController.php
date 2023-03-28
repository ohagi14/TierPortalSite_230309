<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHospitalRequest;
use App\Http\Requests\UpdateHospitalRequest;
use App\Models\AnimalCategory;
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
		$hospitals = Hospital::searchHospitals()
			->select('id', 'title', 'is_selling', 'animal_category')
			->paginate(3);

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
		$categories = AnimalCategory::all();
		return Inertia::render('Admin/Hospitals/Create', compact('categories'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \App\Http\Requests\StoreHospitalRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(StoreHospitalRequest $request)
	{
		$hospital = Hospital::create([
			'title' => $request->title,
			'sub_title' => $request->sub_title,
			'contents' => $request->contents,
			'prefecture' => $request->prefecture,
			'animal_category' => $request->animal_category,
		]);

		return redirect()->route('hospitals.index')
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
		$categories = AnimalCategory::all();
		return Inertia::render('Admin/Hospitals/Edit', [
			'hospital' => $hospital,
			'categories' => $categories,
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
		$hospital->prefecture = $request->prefecture;
		$hospital->is_selling = $request->is_selling;
		$hospital->animal_category = $request->animal_category;
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
