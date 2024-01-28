<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vacancies\ShowController;
use App\Http\Controllers\Vacancies\IndexController;

Route::get('/', IndexController::class)->name('index');
Route::get('/{vacancy}', ShowController::class)->name('show');