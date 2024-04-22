<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kenward', function () {
    return view('kenward');
});

Route::get('/ticket', function () {
    return view('ticket');
});