<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::resource('hospitals', HospitalController::class)->middleware(['auth', 'verified']);
