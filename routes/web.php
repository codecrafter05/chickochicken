<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});


Route::get('/menu/{category}', function ($category) {
    return view('page2', ['category' => $category]);
});
