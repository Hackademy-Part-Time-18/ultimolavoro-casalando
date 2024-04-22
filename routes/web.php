<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PublicController::class , 'homepage'])->name('homepage');

Route::get('/contattaci',[PublicController::class , 'contact'])->name('contact');
