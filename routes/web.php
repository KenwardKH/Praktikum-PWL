<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/ticket', function () {
    return view('ticket');
});

Route::get('/signUp', function () {
    return view('signup');
});