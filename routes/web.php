<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard.index')->with('titulo', 'Dashboard');
})->name('dashboard.index');
