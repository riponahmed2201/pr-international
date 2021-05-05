<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\TeamMemberController;
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

    //Team Member Routes
    Route::group(['prefix' => 'team-member'], function () {
        Route::get('/index', [TeamMemberController::class, 'index'])->name('teamMember.index');
        Route::get('/create', [TeamMemberController::class, 'create'])->name('teamMember.create');
        Route::post('/store', [TeamMemberController::class, 'store'])->name('teamMember.store');
        Route::get('/edit/{id}', [TeamMemberController::class, 'edit'])->name('teamMember.edit');
        Route::post('/update/{id}', [TeamMemberController::class, 'update'])->name('teamMember.update');
        Route::get('/delete/{id}', [TeamMemberController::class, 'delete'])->name('teamMember.delete');
    });
});
