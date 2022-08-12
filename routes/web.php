<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\GamerTagController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TournamentPrizeController;

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

Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');



Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::resources(['statuses' => StatusController::class]);
    Route::resources(['gamer-tags' => GamerTagController::class]);
    Route::resources(['prizes' => TournamentPrizeController::class]);
    Route::resources(['tournaments' => TournamentController::class]);
    Route::resources(['teams' => TeamController::class]);
});
