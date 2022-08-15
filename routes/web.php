<?php

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
Route::get('/aster', function () {
    return view('aster');
})->name('aster');
Route::get('/diskless', function () {
    return view('diskless');
})->name('diskless');


Auth::routes();

Route::get('/aster', function () {
    return view('aster');
})->name('aster');
Route::get('/aster', function () {
    return view('aster');
})->name('aster');


Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/games', fn() => view('games'))->name('games');
    Route::get('/applications', fn() => view('applications'))->name('applications');

});
