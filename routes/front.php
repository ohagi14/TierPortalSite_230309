
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Hospital;


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
	return Inertia::render('TopPage', [
		'prefectures' => config('prefectures'),
	]);
})->name('TopPage');

Route::get('/hospital', function (Request $request) {
	$hospitals = Hospital::searchHospitals($request->s)->prefecturesHospitals($request->p)->select('id', 'title', 'prefecture')->paginate(10);

	return Inertia::render('Front/Hospital/Index', [
		'prefectures' => config('prefectures'),
		'hospitals' => $hospitals,
	]);
})->name('HospitalIndex');

Route::get('/hospital/search', function (Request $request) {
	$hospitals = Hospital::searchHospitals($request->s)->prefecturesHospitals($request->p)->select('id', 'title', 'prefecture')->paginate(10);

	return Inertia::render('Front/Hospital/Search', [
		'prefectures' => config('prefectures'),
		'hospitals' => $hospitals,
	]);
})->name('HospitalSearch');

Route::get('/hospital/{id}', function (Request $request, Hospital $hospital) {
	// dd($hospital);
	return Inertia::render('Front/Hospital/Post', [
		'hospital' => $hospital,
	]);
});
