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

Route::get('/', function () {
    return view('welcome');
});
//Route::post('/', function(){  ddd(request()->all()); })->name('test');


Route::post('/',  [CheckandsaveController::class, 'savetodb'])->name('test');
Route::get('/save', function () {
    return view('save');
})->name('save');
