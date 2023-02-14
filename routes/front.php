
<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\FrontHospitalController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
	return Inertia::render('TopPage');
})->name('TopPage');
Route::resource('hospital', FrontHospitalController::class);
