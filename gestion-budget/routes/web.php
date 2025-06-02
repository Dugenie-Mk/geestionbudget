<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/budgets', function () {
    return view('budgets');
})->name('budgets');

Route::get('/transactions', function () {
    return view('transactions');
})->name('transactions');

Route::get('/profil', function () {
    return view('profil');
})->name('profil');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register', [AuthController::class, 'inscription'])->name('register.submit');

Route::get('/password', function () {
    return view('password.forgetpassword');
})->name('password');

Route::get('/form-ajouter-budget', function () {
    return view('AjouterBudget');
})->name('budgets.create');

Route::get('/form-modifier-budget', function () {
    return view('ModifierBudget');
})->name('budgets.edit');

Route::get('/form-ajouter-transactions', function () {
    return view('transactions.AjouterTransactions');
})->name('transactions.create');

Route::get('/form-modifier-transactions', function () {
    return view('transactions.ModifierTransactions');
})->name('transactions.edit');

// Routes pour les catégories
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
Route::get('/form-ajouter-categorie', [CategoryController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('/form-modifier-categorie/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');