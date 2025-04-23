<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/budgets', function () {
    return view('budgets');
})->name('budgets');

Route::get('/depenses', function () {
    return view('depenses');
})->name('depenses');

Route::get('/revenus', function () {
    return view('revenus');
})->name('revenus');

Route::get('/rapports', function () {
    return view('rapports');
})->name('rapports');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
