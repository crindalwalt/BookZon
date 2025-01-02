<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get("/",[BookController::class,"index"])->name(("home"));
Route::get("/kitabein",[BookController::class,"all_books"])->name("books");
Route::get("/books/{id}",[BookController::class,"bookDetail"])->name("bookDetail");


Route::get("/about",[BookController::class,"about"]);


Route::view("contact","/contact");


Route::get("/first-post",function (){
    return "<h1>First post title</h1>";
});
