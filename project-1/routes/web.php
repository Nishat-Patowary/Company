<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\ContactController;
use app\http\Controllers\CategoryController;
use app\Models\user;
use Illuminate\Support\Facades\DB;

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

//category coltroller
Route::get("/category/all", [CategoryController::class, "Allcat"])->name('all.category');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $users = User::all();
    $users= DB::table("users")->get();
    return view('dashboard',compact("users"));
})->name('dashboard');
