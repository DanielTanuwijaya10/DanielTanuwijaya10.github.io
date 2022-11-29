<?php

namespace App\Http\Controllers;

use App\Models\books_Categories;
use App\Models\categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoriesController extends Controller
{
    //
    public function showBooks($id) {
        $categories = categories::find($id);
        $books = DB::table('books')
            ->join('books_categories','books_id', '=','books_categories.books_id')
            ->where('categories_id',$id)
            ->get();
            return view('cat1',['books'=>$books])->with('categories', $categories);
            // return view('cat1', ['cat' => $categories]);
    }

}

