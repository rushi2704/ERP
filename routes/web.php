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

Route::get('/login', function () {
    return view('login');
});

Route::get('/registration', function () {
    return view('registration');
});


// user folder = list pages, add ,edit 

Route::get('/user/list', function () {
    return view('user.list-user');
});
Route::get('/user/add', function () {
    return view('user.add-page');
});
Route::get('/user/edit', function () {
    return view('user.edit-user');
});




