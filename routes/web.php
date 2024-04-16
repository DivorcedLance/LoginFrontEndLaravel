<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'login')->name('login');
Route::view('/change_password', 'change_password')->name('change_password');
Route::view('/reset_password', 'reset_password')->name('reset_password');
//Equivalente a
//Route.view('/login', 'login').name('login');
