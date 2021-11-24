<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function() {
   return 'Hello world';
});*/

Route::get('/', function () {
    $res = 2 + 3;
    $name = 'John';
//    return view('home', compact('res', 'name'));
    return view('home', ['res' => $res, 'name' => $name]);
})->name('home');

/*Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/send-email', function () {
    if(!empty($_POST)) {
        dump($_POST);
    }
    return 'Send Mail';
});*/

Route::match(['post', 'get', 'put'], '/contact', function () {
    if (!empty($_POST)) {
        dump($_POST);
    }
    return view('contact');
})->name('contact');

Route::view('/test', 'test');

/*Route::get('/post/{id}', function ($id) {
    return "Post $id";
});*/

Route::get('/post/{id}/{slug?}', function ($id, $slug = null) {
    return "Post $id | $slug";
})->name('post');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/posts', function () {
        return 'Posts List';
    });

    Route::get('/post/create', function () {
        return 'Post create';
    });

    Route::get('/post/{id}/edit', function ($id) {
        return "Edit post $id";
    })->name('post');
});
Route::fallback(function () {
//   return redirect()->route('home');
    abort(404, 'Oops! Page not found...');
});
