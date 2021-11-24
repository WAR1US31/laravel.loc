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
    return view('home', compact('res', 'name'));
//    return view('home', ['res' => $res, 'name' => $name]);
});

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

Route::match(['post', 'get'], '/contact', function () {
    if(!empty($_POST)) {
        dump($_POST);
    }
    return view('contact');
})->name('contact');

Route::view('/test', 'test');
