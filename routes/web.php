<?php

use App\Http\Controllers\kadai01_1Controller;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

// kadai01_1
Route::get('kadai01_1', [Kadai01_1Controller::class, 'index']);

use App\Http\Controllers\Sample01Controller;

Route::get('sample01', [Sample01Controller::class, 'index']);

// kadai02_1
use App\Http\Controllers\Kadai02_1Controller;

Route::get('kadai02_1', [Kadai02_1Controller::class, 'index']);

// kadai02_2
use App\Http\Controllers\Kadai02_2Controller;

Route::get('kadai02_2', [Kadai02_2Controller::class, 'index']);

// kadai02_3
use App\Http\Controllers\Kadai02_3Controller;

Route::get('kadai02_3', [Kadai02_3Controller::class, 'index']);

use App\Http\Controllers\Kadai03_1Controller;

Route::get('kadai03_1', [Kadai03_1Controller::class, 'index']);


use App\Http\Controllers\Sample04Controller;

Route::get('sample04', [Sample04Controller::class, 'index']);
Route::post('sample04', [Sample04Controller::class, 'post']);

use App\Http\Controllers\kadai04_1Controller;

Route::get('kadai04_1', [kadai04_1Controller::class, 'index']);
Route::post('kadai04_1', [kadai04_1Controller::class, 'post']);


use App\Http\Controllers\Sample05Controller;

Route::get('sample05_1', [Sample05Controller::class, 'index'])->name('sample05_1');
Route::post('sample05_1', [Sample05Controller::class, 'post']);

use App\Http\Controllers\Kadai05_1Controller;

Route::get('kadai05_1', [Kadai05_1Controller::class, 'index'])->name('kadai05_1');
Route::post('kadai05_1', [Kadai05_1Controller::class, 'post']);

use App\Http\Controllers\Kadai06_1Controller;

Route::resource('kadai06_1', Kadai06_1Controller::class);
