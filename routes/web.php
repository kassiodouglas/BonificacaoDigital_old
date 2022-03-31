<?php

use App\Models\ModelUser;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('Pages.movements.index');
})->name('home');

Route::get('/login', function () {
    return view('Pages.login.index');
})->name('login');

Route::get('/movimentacoes', function () {
    return view('Pages.movements.index');
})->name('movements');

Route::get('/funcionarios', function () {
    return view('Pages.employees.index');
})->name('employees');

Route::get('/logout', function () {
    return view('Pages.login.index');
})->name('logout');


