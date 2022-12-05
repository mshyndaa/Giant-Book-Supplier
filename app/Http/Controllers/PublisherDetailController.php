<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PublisherDetailController extends Controller
{
    public function showPublisherDetail($publisher_id){
        $publisher = DB::table('publishers')->where('id' , $publisher_id)->first();
        $books = DB::table('books')->where('publisher_id', $publisher->id)->get();
        return view('/publisherdetail' , ['books'=> $books] , ['publisher' => $publisher]);
    }
}
