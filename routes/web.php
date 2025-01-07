<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::middleware(["auth"])->group(function () {

    Route::get("/",[BookController::class,"index"])->name(("home"));
    Route::get("/books",[BookController::class,"all_books"])->name("books");
    Route::get("/books/{id}",[BookController::class,"bookDetail"])->name("bookDetail");


    Route::get("/about",[BookController::class,"about"]);


    Route::view("contact","/contact");



});






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
