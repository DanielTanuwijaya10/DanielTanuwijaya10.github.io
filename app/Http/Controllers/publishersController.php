<?php

namespace App\Http\Controllers;

use App\Models\publishers;
use App\Models\Books;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class publishersController extends Controller
{
    public function showAll(){
        $publishers = publishers::all();
        return view('publishers',['publishers' => $publishers]);
    }

    public function showDetail($id){
        $data = publishers::find($id);
        $books = Books::all()->where('publishers_id',$id);
        return view('publishersDetail',['publishers' => $data])->with('books', $books);
    }
}
