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

Route::get('/', function () {
    // return view('welcome');
    // $data = ['name' => 'vicky', 'say' => 'hi'];
    // return view('welcome')->with('name', 'vicky')
    //     ->with('say', '嗨！');
    // return view('welcome', ['name' => 'vicky', 'say' => '嗨！']);
    return view('welcome');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/introduction', function () {
    return view('introduction');
});
Route::get('/service', function () {
    return view('service');
});

//驗證
Auth::routes();

// Route::get('/home', 'HomeController@home')->name('home');
Route::get('/products', 'ProductController@products')->name('products');
Route::get('/profile', 'HomeController@profile')->name('profile');
Route::get('/control', 'HomeController@control')->name('control');
