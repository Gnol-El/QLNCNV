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
//frontend
Route::get('/', 'HomeController@index')->name('trang-chu');
Route::get('/trang-chu', 'HomeController@index');
Route::get('/designed-by', 'HomeController@designed_by');

//backend
Route::get('/admin', 'AdminController@index')->name('login');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@dashboard');
Route::get('/logout', 'AdminController@logout');

//admin
Route::get('/xemthongtin', 'xemthongtincontroller@index')->name('b1.index');
Route::get('/xemthongtin/{MaDA}', 'xemthongtincontroller@index2')->name('b1.index2');
Route::get('/xemthongtin1/{MaDA}', 'xemthongtincontroller@index3')->name('b1.index33');
Route::get('/xoathongtinduan/{MaDA}', 'xemthongtincontroller@del')->name('b1.del');

Route::get('/xemluong', 'xemluongnvcontroller@index')->name('b2.index');
Route::get('/chitietluong/{MaNV}', 'xemluongnvcontroller@chitiet')->name('b2.chitiet');
Route::get('/xoathongtinnhanvien/{MaNV}', 'xemluongnvcontroller@del')->name('b2.del');

Route::get('/themnv', 'themnvcontroller@index')->name('b3.index');
Route::post('/insert', 'themnvcontroller@insert');

Route::get('/themduan', 'themduancontroller@index')->name('b4.index');
Route::post('/insertDA', 'themduancontroller@insertDA')->name('b4.insert');

//user
Route::get('/xemduan', 'UserController@index')->name('user.xemduan');

Route::get('/thongtinnhanvien', 'UserController@info')->name('user.thongtin');