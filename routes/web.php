<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Ujian\SoalController;
use App\Http\Controllers\AcceptController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    Route::get('/dashboard/recommendation/{index}', function () {
        return Inertia::render('Dashboard');
    })->name('rindex');
    Route::get('/rankcurrent', function () {
        return Inertia::render('rankcurrent');
    })->name('rankcurrent');
    Route::get('accept', [AcceptController::class, 'index']);
    Route::get('hujan', function(){
        return Inertia::render('list');
    });
});

// Route::get('/dashboard', function () {
    //     return Inertia::render('Dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');
    
    require __DIR__.'/auth.php';
    