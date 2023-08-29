<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckandsaveController;
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
//Route::post('/', function(){  ddd(request()->all()); })->name('test');

Route::get('/', function () { return view('home');})->name('home');
Route::get('/add', function () { return view('add');})->name('add');
Route::get('/see', [CheckandsaveController::class, 'see'])->name('see');

Route::post('/',  [CheckandsaveController::class, 'savetodb'])->name('save');
Route::get('/save', function () { return view('confirm');})->name('confirm');
