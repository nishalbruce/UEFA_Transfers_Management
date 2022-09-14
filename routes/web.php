<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ParcourController;


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

Route::get('/players', [PlayerController::class, 'index'])->name('player.index');
Route::get('/players/detail/{pk}', [PlayerController::class, 'detail'])->name('player.detail');
Route::put('/players/update/{pk}', [PlayerController::class, 'update'])->name('player.update');
//Route::get('/players/edit/{pk}', [PlayerController::class, 'edit'])->name('player.edit');
Route::get('/clubs', [ClubController::class, 'index'])->name('club.index');
Route::get('/countries', [CountryController::class, 'index'])->name('country.index');
Route::get('/agents', [AgentController::class, 'index'])->name('agent.index');
Route::get('/parcours', [ParcourController::class, 'index'])->name('parcour.index');

