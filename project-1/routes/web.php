<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\ContactController;
use app\Models\user;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    echo "This is home page";
});
Route::get('/about', function () {
    return view("about");
})->middleware("Check");

Route::get('/blog', function () {
    return view('blog');
});


Route::get('/protfolio', function () {
    return view('protfolio');
});


Route::get('/contact', function () {
    return view("contact");
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users = User::all();
    return view('dashboard',compact("users"));
})->name('dashboard');
