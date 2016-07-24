<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Book;
use Illuminate\Support\Facades\Validator;

use DB;

class BookController extends Controller
{
    public function index(){
        $books = Book::all();
        return response()->json($books);
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
            return response()->json($validator->messages(), 406);
//            return response()->json(array(
//                'error' => $validator->messages(),
//                406
//            ));

            $book = new Book($request->all());
            $book->title= $request->title;
            $book->author = $request->author;
            $book->year = $request->year;
            $book->genre = $request->genre;
            $book->user_id = $request->user_id;
            $book->save();
            return response()->json($book, 201);

    }    public function update(Request $request)
    {

        $rules = array(
            'title' => 'required',
            'author' => 'required|alpha',
            'year' => 'required' ,
            'genre' => 'required|alpha'
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails())
            return response()->json($validator->messages(), 406);

            $book = Book::find($id);
            $book->title= $request->title;
            $book->author = $request->author;
            $book->year = $request->year;
            $book->genre = $request->genre;
            $book->user_id = $request->user_id;
            $book->save();

            return response()->json($book, 201);
    }
    public function destroy($id)//DELETE
    {
            $book = Book::find($id);
            $book->delete();

            return response()->json($book, 204);

    }
    public function show($id){

        $book = Book::find($id);
        return response()->json($book, 200);
    }
}
