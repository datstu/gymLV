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
Route::get('/','HomeController@index' );
Route::get('user', function () {
    return view('user.user');
});
Route::get('ABOUT','HomeController@about' );
//shop
Route::get('PHU-KIEN','ShopController@shop_pk' );
Route::get('GOI-TAP','ShopController@shop_gt' );
Route::get('SEARCH-GT','ShopController@searchgt' );
Route::get('SEARCH-PK','ShopController@searchpk' );

Route::get('/BOOK', function () {
    return view('index.book');
});
Route::get('/BAI-VIET', function () {
    return view('index.baiviet');
});
Route::get('PHONG-GYM','HomeController@phonggym' );
Route::get('/Bv', function () {
    return view('index.baiviet_detail');
});
//cart
Route::get('add-to-cart/{id}','CartController@getAddtoCart')->name('themgiohang');
Route::get('del-cart/{id}','CartController@getDelItemCart')->name('xoagiohang');
Route::get('del-all-cart','CartController@delAll')->name('resetgiohang');
Route::get('/CART-DETAIL', function () {
    return view('index.cart');
});
Route::get('search', 'CartController@ajax')->name('search');
Route::get('updateCart', 'CartController@ajaxUpdate')->name('updatecart');
//
Route::get('TU-VAN', function () {
    return view('index.checkout');
});
Route::post('Thongtin','TuvanController@tuvan' );



Route::get('/admin','AdminController@index');

Route::get('/tat-thong-bao/{mess}','CustomerController@hiddenMessage');

Route::get('/quan-ly-khach-hang','CustomerController@listCustomer');
Route::get('/them-khach-hang','CustomerController@addCustomer');
Route::post('/them-khach-hang','CustomerController@saveAddCustomer');
Route::get('/delUser/{id}','CustomerController@delCustomer');
Route::get('/cap-nhat-hoi-vien/{id}','CustomerController@updateCustomer');
Route::post('/cap-nhat-hoi-vien','CustomerController@saveEditCustomer');


Route::get('/quan-ly-huan-luan-vien','PersonTrainerController@listPT');
Route::get('/them-huan-luan-vien','PersonTrainerController@addPT');
Route::post('/them-huan-luan-vien','PersonTrainerController@saveAddPT');
Route::get('/cap-nhat-huan-luan-vien/{id}','PersonTrainerController@updatePT');
Route::post('/cap-nhat-PT','PersonTrainerController@saveEditPT');
Route::get('/delPT/{id}','PersonTrainerController@delPT');

Route::get('/quan-ly-phong-tap','GymController@listGym');
Route::get('/them-phong-tap','GymController@addGym');
Route::post('/them-phong-tap','GymController@saveAddGym');
Route::post('/cap-nhat-phong-tap','GymController@saveEditGym');
Route::get('/cap-nhat-phong-tap/{id}','GymController@updateGym');
Route::get('/delGym/{id}','GymController@delGym');

Route::get('/quan-ly-goi-tap','ComboGymController@listCB');
Route::get('/them-goi-tap','ComboGymController@addCB');
Route::post('/them-goi-tap','ComboGymController@saveAddCB');
Route::post('/cap-nhat-goi-tap','ComboGymController@saveEditCB');
Route::get('/cap-nhat-goi-tap/{id}','ComboGymController@updateCB');
Route::get('/delCB/{id}','ComboGymController@delCB');

Route::get('/quan-ly-san-pham','ProductController@listPD');
Route::get('/them-san-pham','ProductController@addPD');
Route::post('/them-san-pham','ProductController@saveAddPD');
Route::post('/cap-nhat-san-pham','ProductController@saveEditPD');
Route::get('/cap-nhat-san-pham/{id}','ProductController@updatePD');
Route::get('/delPD/{id}','ProductController@delPD');
Route::get('/quan-ly-anh/{id}','ProductController@photoManagenment');



