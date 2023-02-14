
<?php

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

	$hospitals = Hospital::searchHospitals()->select('id', 'title', 'sample_num', 'is_selling')->paginate(50);

	return Inertia::render('Front/Hospital/Index', [
		'hospitals' => $hospitals,
	]);
})->name('HospitalIndex');

