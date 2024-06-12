<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('articles', [ArticleController::class, 'index'])
    ->name('articles.index');
// имя маршрута, нужно для того, чтобы не создавать ссылки руками
