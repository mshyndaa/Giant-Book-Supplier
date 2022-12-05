<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function showPublisher(){
        $publishers = DB::table('publishers')->get();
        return view('/publisher' , ['publishers' => $publishers]);
    }
}
