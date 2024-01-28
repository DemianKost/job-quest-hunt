<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vacancies\IndexController;

Route::get('/', IndexController::class)->name('index');