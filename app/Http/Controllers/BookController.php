<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view("home");
    }

    public function about()
    {
        return view("about");
    }

    public function all_books()
    {
        $all_books = Book::all();
        // dd($all_books);
        return view("all_books", [
            'books' => $all_books,
        ]);
    }
}
