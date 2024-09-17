<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Pages\ConfiguracaoPage;
use App\Livewire\Pages\BookList;
use App\Livewire\Pages\Home;
use App\Livewire\Dashboard;
 
Route::get('/home', Home::class);
Route::get('/dashboard', Dashboard::class);
Route::get('/lista', BookList::class);

Route::get('/', function () {
    return view('welcome');
});

