<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Book;
use App\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

use DB;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();

        return response()->json(array(
            'error' => false,
            'users' => $books->toArray()),
            200
        );
    }

    public function store(Request $request)
    {

        $rules = array(
            'title' => 'required',
            'author' => 'required|alpha',
            'year' => 'required' ,
            'genre' => 'required|alpha'
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
            return response()->json(array(
                'error' => $validator->messages(),
                406
            ));

            $book = new Book($request->all());
            $book->title= $request->title;
            $book->author = $request->author;
            $book->year = $request->year;
            $book->genre = $request->genre;
            $book->user_id = $request->user_id;
            $book->save();

            return response()->json(array(
                'error' => false,
                'book' => $book->toArray()),
                201
            );
    }

}
