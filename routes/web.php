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

/*
| Routes Artisan
*/
Route::get('artisan', function () {
    Artisan::call('clear-compiled');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});

Auth::routes();

Route::get('/', 'HomeController@home')->name('inicio');
Route::get('inicio', 'HomeController@home')->name('inicio');
Route::get('/productos', 'HomeController@product')->name('productos');
Route::get('/microsoft', 'HomeController@microsoft')->name('microsoft');
Route::get('/convocatorias', 'HomeController@postulation')->name('convocatorias');
Route::get('/noticias', 'HomeController@news')->name('noticias');
Route::get('/nosotros', 'HomeController@about_us')->name('nosotros');
Route::get('/contactanos', 'HomeController@contact')->name('contactanos');

Route::get('detail-product/{slug}/{id}', 'HomeController@detail')->name('detail-product');
// Route::get('/login_user', 'HomeController@login_user')->name('login_user');