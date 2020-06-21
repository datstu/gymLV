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
    return view('index.home');
});
Route::get('user', function () {
    return view('user.user');
});
Route::get('/SHOP', function () {
    return view('index.shop');
});
Route::get('/PHONG-GYM', function () {
    return view('index.PhongGym');
});
Route::get('/admin','AdminController@index');

