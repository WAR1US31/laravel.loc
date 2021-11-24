<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Test\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [HomeController::class, 'test']);
Route::get('/test2', [TestController::class, 'index']);
Route::get('/page/{slug}', [PageController::class, 'show']);

Route::resource('/admin/posts', PostController::class, ['parameters' => ['posts' => 'slug',]]);

Route::fallback(function () {
//   return redirect()->route('home');
    abort(404, 'Oops! Page not found...');
});
