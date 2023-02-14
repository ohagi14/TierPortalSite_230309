
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

Route::get('/', function () {
	return Inertia::render('TopPage');
})->name('TopPage');

Route::get('/hospital', function () {
	return Inertia::render('Front/Hospital/Index');
})->name('HospitalIndex');

Route::get('/hospital/search', function (Request $request) {

	$hospitals = Hospital::searchHospitals($request->s)->select('id', 'title', 'sample_num', 'is_selling')->paginate(2);

	return Inertia::render('Front/Hospital/Search', [
		'hospitals' => $hospitals,
	]);
})->name('HospitalSearch');
