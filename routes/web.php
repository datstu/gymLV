<?php

use Illuminate\Support\Facades\Route;



Route::get('/index','HomeController@index' )->name('index');
Route::get('/','HomeController@index' );
Route::get('user', function () {
    return view('user.user');
});

Route::get('ABOUT','HomeController@about' )->name('about');
//shop
Route::get('PHU-KIEN','ShopController@shop_pk' )->name('phukien');
Route::get('GOI-TAP','ShopController@shop_gt' )->name('goitap');
Route::get('SEARCH-GT','ShopController@searchgt' )->name('searchgt');
Route::get('SEARCH-PK','ShopController@searchpk' )->name('searchpk');





Route::get('/BAI-VIET', function () {
    return view('index.baiviet');
});
Route::get('PHONG-GYM','HomeController@phonggym' )->name('phonggym');
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
Route::get('CHECKOUT_GT/{id}','checkoutController@thanhtoanGT')->name('thanhtoanGT');
Route::get('ODER_GT','checkoutController@inhoadonGT')->name('inhoadonGT');
Route::get('CHECKOUT','checkoutController@thanhtoan')->name('thanhtoan');
Route::get('ODER','checkoutController@inhoadon')->name('inhoadon');
Route::get('/MY-ACCOUNT','UserController@myaccount')->name('my-account');
Route::get('/MY-ACCOUNT/UPDATE','UserController@update')->name('updateAccount');
Route::post('/MY-ACCOUNT/UPDATE_PASSWORD','UserController@update_password')->name('updateAccount_pass');




Route::get('TU-VAN', function () {
    return view('index.checkout');
});






Route::get('ACCOUNT/login','UserController@login' )->name('viewlogin');
Route::get('ACCOUNT/register','UserController@register' )->name('viewregister');
Route::get('ACCOUNT/add','UserController@adduser' );
Route::post('ACCOUNT/checklogin','UserController@checklogin')->name('dangnhap');
Route::get('ACCOUNT/logout','UserController@logout')->name('dangxuat');

Route::post('Thongtin','TuvanController@tuvan' )->name('tuvan');







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


Route::get('/BOOK', 'ScheduleController@homeSchedule')->name('book');
Route::get('/dat-lich','ScheduleController@bookSchedule');





