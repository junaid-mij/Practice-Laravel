<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{
    function getBooks()
    {
        $books = DB::table('books')->paginate(5);
        return view('pagination',['books'=>$books, 'showText'=>false]);
    }
}
