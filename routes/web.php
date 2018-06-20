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

Route::get('/realizaciya-po-dogovoru', function () {
    return view('site.realizaciya-po-dogovoru');
})->name('realizaciya-po-dogovoru');

Route::get('/obrazci-dokumentov', function () {
    return view('site.obrazci-dokumentov');
})->name('obrazci-dokumentov');

Route::get('/normativnie-akti', function () {
    return view('site.normativnie-akti');
})->name('normativnie-akti');

Route::get('/kontakty', function () {
    return view('site.kontakty');
})->name('kontakty');

Route::get('/politic', function () {
    return view('site.politic');
})->name('politic');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/documents', 'DocumentController');
Route::resource('/posts', 'PostController');
