<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

Route::get('/', [ProjectController::class, 'getAllDepartments']);
// Route::get('/user', [UserController::class, 'index']);
Route::post('/showAppointments', [ProjectController::class, 'showAppointments'])->name('showAppointments')->middleware('auth');

Route::post('/bookAppointment', [ProjectController::class, 'bookAppointment'])->name('bookAppointment')->middleware('auth');

Route::get('/myBookings', [ProjectController::class, 'myBookings'])->name('myBookings')->middleware('auth');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
