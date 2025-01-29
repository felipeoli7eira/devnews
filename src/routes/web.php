<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('welcome'));

Route::resource('news', \App\Modules\News\Controllers\NewsController::class);
