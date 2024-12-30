<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get("/",[BookController::class,"index"]);
Route::get("/books",[BookController::class,"all_books"]);


Route::get("/about",[BookController::class,"about"]);


Route::view("contact","/contact");


Route::get("/first-post",function (){
    return "<h1>First post title</h1>";
});
