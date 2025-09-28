<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;

// Auth
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

// Product
use App\Livewire\Products\Index as ProductIndex;
use App\Livewire\Products\Create as ProductCreate;
use App\Livewire\Products\Update as ProductUpdate;

// Transaction
use App\Livewire\Transactions\Index as TransactionIndex;
use App\Livewire\Transactions\Create as TransactionCreate;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    Route::get('/products/list', ProductIndex::class)->name('products.index');
    Route::get('/products/insert', ProductCreate::class)->name('products.create');
    Route::get('/products/edit/{id}', ProductUpdate::class)->name('products.edit');

    Route::get('/transaction/list', TransactionIndex::class)->name('transactions.index');
    Route::get('/transaction/create', TransactionCreate::class)->name('transactions.create');
});
