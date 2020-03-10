<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('users');
});

Route::get('usuarios','UserController@users')->name('users');
