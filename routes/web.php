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
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('login', function () {
    return view('login');
});

Route::get('transaction/index', function () {
    return view('transaction/index');
});

Route::get('user/index', function () {
    return view('user/index');
});

Route::get('changepassword', function () {
    return view('changepassword');
});

Route::get('changeusername', function () {
    return view('changeusername');
});

/**country routes */

Route::get('country/index', function () {
    return view('country/index');
});

Route::get('country/add', function () {
    return view('country/add');
});

Route::get('country/edit', function () {
    return view('country/edit');
});