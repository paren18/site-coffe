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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/onas', function () {
    return view('onas');
})->name('onas');



Route::get('/logout', 'LoginControler@logout')->name('logout');


Route::get('/register', 'RegisterControler@create')->name('register');
Route::post('/register', 'RegisterControler@store');

Route::get('/login', 'LoginControler@create')->name('login');
Route::post('/login', 'LoginControler@store');
Route::get('/account', 'LoginControler@showAccount')->name('account');



Route::get('/menu', 'ContactController@menu')->name('menu');

Route::get('/menu/cakes/{id}', 'AddProduct@addcake')->name('addcake');
Route::get('/menu/cofes/{id}', 'AddProduct@addcofes')->name('addcofes');
Route::get('/cart', 'AddProduct@cart')->name('cart');  // Исправлено: изменен контроллер для отображения корзины
Route::get('/cart/{id}', 'AddProduct@cartdelite')->name('cartdelite');



Route::patch('update-cart', [AddProduct::class, 'update'])->name('update_cart');
Route::post('/order', 'OrderController@order')->name('order');
Route::get('/order', 'OrderController@show')->name('order');




