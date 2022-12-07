<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\LoginController;

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

Route::resource('login', LoginController::class)->only(['loginUser', 'index']);

Route::get('loginUser', [LoginController::class, 'loginUser'])->name('loginUser');

Route::resource('conference', ConferenceController::class)->only(['index', 'guest', 'show', 'store', 'create', 'edit', 'update', 'destroy']);

Route::delete('conference/destroy', [ConferenceController::class, 'destroy'])->name('conference.destroy');
Route::get('conference/create', [ConferenceController::class, 'create'])->name('conference.create');
Route::get('conference/guest', [ConferenceController::class, 'guest'])->name('conference.guest');
Route::post('conference/store', [ConferenceController::class, 'store'])->name('conference.store');
Route::get('conference/edit', [ConferenceController::class, 'edit'])->name('conference.edit');
Route::get('conference/update', [ConferenceController::class, 'update'])->name('conference.update');
