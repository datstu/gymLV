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


Route::get('/index','HomeController@index' );
Route::get('user', function () {
    return view('user.user');
});
Route::get('PHU-KIEN','HomeController@shop_pk' );
Route::get('GOI-TAP','HomeController@shop_gt' );
Route::get('PHONG-GYM','HomeController@phonggym' );
Route::get('SEARCH-GT','HomeController@searchgt' );
Route::get('SEARCH-PK','HomeController@searchpk' );
Route::get('ABOUT','HomeController@about' );
Route::get('/BOOK', function () {
    return view('index.book');
});
Route::get('/BAI-VIET', function () {
    return view('index.baiviet');
});
Route::get('/Bv', function () {
    return view('index.baiviet_detail');
});

Route::get('TU-VAN', function () {
    return view('index.checkout');
});
Route::get('Thongtin','HomeController@tuvan' );

