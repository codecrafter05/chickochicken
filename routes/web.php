<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MenuController::class, 'index'])->name('menu.index');

Route::get('/menu/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/links', function () {
    return view('links');
})->name('links');

Route::get('/links/saudi', function () {
    return view('links-saudi');
})->name('links.saudi');

Route::get('/saudi', function () {
    return view('saudi');
})->name('saudi');
