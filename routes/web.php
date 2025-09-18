<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;

// Product
use App\Livewire\Products\Index as ProductIndex;
use App\Livewire\Products\Insert as ProductPost;
use App\Livewire\Products\Create as ProductCreate;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::get('/product/list', ProductIndex::class)->name('products.index');
Route::get('/product/insert', ProductCreate::class)->name('products.create');
