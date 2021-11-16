<?php

use App\Http\Controllers\DriverController;
use App\Http\Controllers\TeamController;
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
    return view('welcome');
});

Route::get('/drivers', [DriverController::class, 'list'])->name('driver.list');
Route::get('/createdriver', [DriverController::class, 'create'])->name('driver.create');
Route::get('/updatedriver/{id}', [DriverController::class, 'update'])->name('driver.update');
Route::get('/deletedriver/{id}', [DriverController::class, 'delete'])->name('driver.delete');

Route::get('/teams', [TeamController::class, 'list'])->name('team.list');
Route::get('/createteam', [TeamController::class, 'create'])->name('team.create');
Route::get('/updateteam/{id}', [TeamController::class, 'update'])->name('team.update');
Route::get('/deleteteam/{id}', [TeamController::class, 'delete'])->name('team.delete');
