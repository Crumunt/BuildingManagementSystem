<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth-pages/index');
})->name('login');

Route::get('/create', function () {
    return view('auth-pages/create');
})->name('create');

Route::get('/reset', function() {
    return view('auth-pages/reset-password');
})->name('reset-password');

Route::get('/admin-dashboard', function () {
    return view('admin-dashboard.index');
})->name('admin-dashboard');
