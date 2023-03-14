
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
	return Inertia::render('Front/Hospital/Index');
})->name('HospitalIndex');

Route::get('/hospital/search', function (Request $request) {
	// dd($request);
	$hospitals = Hospital::searchHospitals($request->s)->prefecturesHospitals($request->p)->select('id', 'title', 'prefecture')->paginate(10);
	// $hospitals = Hospital::searchHospitals($request->s)->select('id', 'title', 'prefecture')->paginate(10);

	return Inertia::render('Front/Hospital/Search', [
		'hospitals' => $hospitals,
	]);
})->name('HospitalSearch');
