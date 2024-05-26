<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class , 'casalando'])->name('casalando');
Route::get('/home',[PublicController::class , 'home'])->name('home');

Route::get('/contattaci', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact-send', [PublicController::class, 'send'])->name('contact.create');

Route::resource('articles', ArticleController::class);
Route::resource('categories', CategoryController::class);