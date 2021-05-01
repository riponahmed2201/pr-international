<?php

use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('master');
});

Auth::routes();

// Admin route
// Route::get('/admin-home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin-home');

// All Backend Routes Here
Route::middleware('auth')->group(function () {

    // Admin Dashboard Route
    Route::get('/admin-home', [DashboardController::class, 'index'])->name('admin-home');

});
