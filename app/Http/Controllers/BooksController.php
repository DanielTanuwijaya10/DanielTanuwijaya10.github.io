<?php

 namespace App\Http\Controllers;

 use App\Models\Books;
 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\DB;

class BooksController extends Controller
{

    public function showAll(){
        $books = Books::all();
        return view('index')->with('books', $books);
    }

    public function showDetail($id){
        $data = Books::find($id);
        return view('bookDetail',['books' => $data]);
    }



}
