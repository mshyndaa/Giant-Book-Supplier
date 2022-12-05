<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $books = DB::table('books')->get();
        return view('home',['books' => $books ]);

    }
}
