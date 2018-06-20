<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('site.index');
})->name('index');

Route::get('/prodazha-imuschestva', function () {
    return view('site.prodazha-imuschestva');
})->name('prodazha-imuschestva');

Route::get('/informacionnye-soobshcheniya', function () {
    return view('site.informacionnye-soobshcheniya');
})->name('informacionnye-soobshcheniya');

Route::get('/pravila-torgov', function () {
    return view('site.pravila-torgov');
})->name('pravila-torgov');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/documents', 'DocumentController');
Route::resource('/posts', 'PostController');
