<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;

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

Route::resource('conference', ConferenceController::class)->only(['index', 'show', 'store', 'create']);

Route::get('conference/create', [ConferenceController::class, 'create'])->name('conference.create');
Route::post('conference/store', [ConferenceController::class, 'store'])->name('conference.store');
