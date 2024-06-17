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

Route::get('articles/create', 'ArticleController@create')
    ->name('articles.create');

// POST-запрос
Route::post('articles', 'ArticleController@store')
    ->name('articles.store');


Route::get('articles/{id}', [ArticleController::class, 'show'])
    ->name('articles.show');

Route::get('articles/{articleId}/comments/{id}', function ($articleId, $id) {
    // ...
});
