
<?php

use App\Http\Controllers\PostsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Hospital;
use App\Models\AnimalCategory;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/test', function () {
	return Inertia::render('Test', [
		'prefectures' => config('prefectures'),
	]);
});


Route::get('/', function () {
	$hospitals = Hospital::all();
	$animalCategories = AnimalCategory::all();
	return Inertia::render('TopPage', [
		'prefectures' => config('prefectures'),
		'hospitals' => $hospitals,
		'animalCategories' => $animalCategories,
	]);
})->name('TopPage');

Route::get('/hospital', function (Request $request) {
	$hospitals = Hospital::searchHospitals($request->s)->prefecturesHospitals($request->p)->animalCategoriesHospitals($request->a)->paginate(10);
	$animalCategories = AnimalCategory::all();

	return Inertia::render('Front/Hospital/Index', [
		'prefectures' => config('prefectures'),
		'hospitals' => $hospitals,
		'animalCategories' => $animalCategories,
	]);
})->name('HospitalIndex');

Route::get('/hospital/search', function (Request $request) {
	$hospitals = Hospital::searchHospitals($request->s)->prefecturesHospitals($request->p)->animalCategoriesHospitals($request->a)->paginate(10);
	$animalCategories = AnimalCategory::all();

	return Inertia::render('Front/Hospital/Search', [
		'prefectures' => config('prefectures'),
		'hospitals' => $hospitals,
		'animalCategories' => $animalCategories,
	]);
})->name('HospitalSearch');

// hospitalの投稿｜IDのみ表示
Route::get('/hospital/{id}', function (Request $request, $id) {
	$post = Hospital::where('id', $id)
				// ->where('category', '投稿')
				->firstOrFail();
	return Inertia::render('Front/Hospital/Post', ['post' => $post]);
})->name('HospitalPost');
