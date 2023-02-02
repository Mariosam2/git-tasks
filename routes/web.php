<?php

use App\Http\Controllers\ApartmentsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//TODO: creare DashboardController, Apartments Controller e importarli

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
Route::resource('apartments', ApartmentsController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth', 'verified')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/apartments', ApartmentsController::class);
});

require __DIR__ . '/auth.php';
