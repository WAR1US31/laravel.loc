<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Test\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/page/about', [PageController::class, 'show'])->name('page.about');


/*Route::fallback(function () {
//   return redirect()->route('home');
    abort(404, 'Oops! Page not found...');
});*/
