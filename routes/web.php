<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', [PageController::class, 'about']);
Route::get('team', [PageController::class, 'team']);

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');
// имя маршрута, нужно для того, чтобы не создавать ссылки руками
