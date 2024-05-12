<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIFootballController;

Route::get('/', [APIFootballController::class, 'index'])->name('dashboard');
Route::get('/teams/{leagueId}', [APIFootballController::class, 'teams'])->name('teams');
Route::get('/standings/{leagueId}', [APIFootballController::class, 'standings'])->name('standings');
