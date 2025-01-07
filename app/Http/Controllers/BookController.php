<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $books = Book::paginate(8);
        return view("home2",[
            'kitabein' => $books,
            'categories' => $categories,
        ]);
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

    public function bookDetail ($id){
        // find the book with the id
        $book = Book::find($id);
        // sending the data to the view
        return view("book_detail2",[
            'book' => $book,
        ]);
    }
}
