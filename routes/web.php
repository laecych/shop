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
    return view('welcome', ['name' => 'vicky', 'say' => '嗨！']);

});

// Route::get('/home', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/products', 'HomeController@products')->name('products');
Route::get('/introduction', 'HomeController@introduction')->name('introduction');
Route::get('/profile', 'HomeController@profile')->name('profile');
