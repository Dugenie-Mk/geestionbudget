<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BudgetController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('home');
})->name('home');

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


//Routes pour les comptes
Route::get('/comptes', [CompteController::class, 'index'])->name('comptes');
Route::get('/form-ajouter-compte', [CompteController::class, 'create'])->name('comptes.create');
Route::post('/comptes', [CompteController::class, 'store'])->name('comptes.store');
Route::get('/form-modifier-compte/{id}', [CompteController::class, 'edit'])->name('comptes.edit');
Route::put('/comptes/{id}', [CompteController::class, 'update'])->name('comptes.update');
Route::delete('/comptes/{id}', [CompteController::class, 'destroy'])->name('comptes.destroy');

//Routes pour les transactions
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');
Route::get('/form-ajouter-transaction', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('/form-modifier-transaction/{id}', [TransactionController::class, 'edit'])->name('transactions.edit');
Route::put('/transactions/{id}', [TransactionController::class, 'update'])->name('transactions.update');
Route::delete('/transactions/{id}', [TransactionController::class, 'destroy'])->name('transactions.destroy');


// Routes pour les budgets
Route::get('/budgets', [BudgetController::class, 'index'])->name('budgets');
Route::get('/form-ajouter-budget', [BudgetController::class, 'create'])->name('budgets.create');
Route::post('/budgets', [BudgetController::class, 'store'])->name('budgets.store');
Route::get('/form-modifier-budget/{id}', [BudgetController::class, 'edit'])->name('budgets.edit');
Route::put('/budgets/{id}', [BudgetController::class, 'update'])->name('budgets.update');
Route::delete('/budgets/{id}', [BudgetController::class, 'destroy'])->name('budgets.destroy');

