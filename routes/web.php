<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/* 管理画面
|--------------------------------------------------------------------------*/
use App\Http\Controllers\HospitalController;

/* フロント
|--------------------------------------------------------------------------*/
use App\Http\Controllers\FrontHospitalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* 管理画面（バックエンド側）
|--------------------------------------------------------------------------*/

Route::resource('hospitals', HospitalController::class)->middleware(['auth', 'verified']);

/* フロント
|--------------------------------------------------------------------------*/
Route::get('/', function () {
	return Inertia::render('TopPage');
})->name('TopPage');
Route::resource('hospital', FrontHospitalController::class);


// Route::get('/', function () {
// 	return Inertia::render('Welcome', [
// 		'canLogin' => Route::has('login'),
// 		'canRegister' => Route::has('register'),
// 		'laravelVersion' => Application::VERSION,
// 		'phpVersion' => PHP_VERSION,
// 	]);
// });

Route::get('/dashboard', function () {
	return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
