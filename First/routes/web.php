<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    echo "This is about page";
});

Route::get('/contact', function () {
echo "This is contact page";
});

Route::get('/blog', function () {
    return view('welcome');
});


Route::get('/protfolio', function () {
    return view('welcome');
});

