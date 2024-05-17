<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class , 'homepage'])->name('homepage');
Route::get('/home',[PublicController::class , 'home'])->name('home');

Route::get('/contattaci',[PublicController::class , 'contact'])->name('contattaci');
Route::post('/contattaci-send', [PublicController::class, 'send'])->name('contattaci.create');

Route::resource('articles', ArticleController::class);
Route::resource('categories', CategoryController::class);