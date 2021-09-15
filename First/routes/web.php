<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/contact', function () {
   return view("contact");
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/protfolio', function () {
    return view('protfolio');
});

