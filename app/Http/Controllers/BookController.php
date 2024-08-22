<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //modification
    public function index()
    {
        // return 'Hello laravel';

        
        // $books = book::take(10)->get();
        // $books = Book::whereBetween('price',[10,15])
        //         ->where('stock','>',10)
        //         ->orderBy('title')
        //         ->get();
                // ->toSql();
        // return $books;
        // $books = book::all();
        $books = Book::paginate(10);
        return view('books.index')
                    ->with('books',$books);
        

        // $books = Book::find(1);
        // dd($books);
    }

    public function show($id)
    {
        // return 'showing book with id '. $id;

        $book = Book::find($id);
        return view('books.show')->with('book',$book);

        // return view('books.show')->with('id',$id);
    }
}
