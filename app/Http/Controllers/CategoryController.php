<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\Publisher;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function showCategory($category_id){
        $book_id = BookCategory::where('category_id',$category_id)->pluck('book_id');
        $books = array();
        foreach ($book_id as $bid){
            array_push($books, Book::where('id',$bid)->first());
        }
        return view("/category", ['books'=>$books]);

    }

    }
