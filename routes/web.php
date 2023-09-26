<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipantsController;

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

Route::get('/', [ParticipantsController::class, 'index']);
Route::post('/', [ParticipantsController::class, 'search'])->name('search');
Route::get('/announcement', [ParticipantsController::class, 'announcement']);
