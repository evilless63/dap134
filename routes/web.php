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

// Route::get('/', 'AdminController@index')->name('admin_home');
Route::get('/', 'HomeController@index')->name('index');
// Route::get('/', function () {
//     return view('site.index');
// })->name('index');

Route::get('/prodazha-imuschestva', function () {
    return view('site.prodazha-imuschestva');
})->name('prodazha-imuschestva');

// Route::get('/informacionnye-soobshcheniya', function () {
//     return view('site.informacionnye-soobshcheniya');
// })->name('informacionnye-soobshcheniya');

Route::resource('documents', 'DocumentController');

Route::resource('posts', 'PostController');

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

// Route::get('/admin/home', function () {
//     return view('admin.home');
// })->name('admin_home');

Route::get('/admin/home', 'AdminController@index')->name('admin_home');


$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');
$this->post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);
// Route::get('405',['as'=>'405','uses'=>'ErrorHandlerController@errorCode405']);
// Auth::routes();


Route::resource('emails', 'MailController');

Route::post('documents/updatelist', 'DocumentController@updatelist');

Route::post('emails/sendemail', 'MailController@sendemail');

Route::resource('categories', 'CategoryController');

