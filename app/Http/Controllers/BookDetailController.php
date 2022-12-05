<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\Request;

class BookDetailController extends Controller
{
    public function showBookDetail ($book_id){
        $book = Book::where('id', $book_id) -> first();
        $publisher = Publisher::where('id', $book->publisher_id)->first();
        $publisher_name  = $publisher->name;
        return view("/bookdetail",['book'=> $book, 'publisher_name'=> $publisher_name
    ]);
    }


}
