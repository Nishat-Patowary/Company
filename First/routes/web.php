<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view("about");
});

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/protfolio', function () {
    return view('protfolio');
});

Route::get("/contact", [ContactController::class, "index"]);

