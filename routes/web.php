<?php

use App\Http\Controllers\ComputerController;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/computer', [ComputerController::class, 'computer'])->name('computer');
Route::post('/computer/store', [ComputerController::class, 'store'])->name('computer.store');
Route::post('/computer/update', [ComputerController::class, 'update'])->name('computer.update');
Route::post('/computer/delete', [ComputerController::class, 'delete'])->name('computer.delete');
