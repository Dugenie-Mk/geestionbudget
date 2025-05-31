<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\BudgetController;
use App\http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/budgets', function () {
    return view('budgets');
})->name('budgets');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/transactions', function () {
    return view('transactions');
})->name('transactions');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

route::post('/inscription', [AuthController::class, 'inscription']);

Route::get('/password', function () {
    return view('password.forgetpassword');
})->name('password');


Route::get('/form-ajouter-budget', function () {
    return view('AjouterBudget');
})->name('form');

Route::get('/form-modifier-budget', function () {
    return view('ModifierBudget');
})->name('form');

