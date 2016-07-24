<?php

namespace App\Http\Controllers;

use App\User;
use App\Book;
use App\Http\Requests;

class TaskController extends Controller
{

    public function index($user_id) //http://localhost:8000/users/2/books
    {
        $user = User::findorFail($user_id);
        $users_books = $user->books;
        return response()->json($users_books, 200);

    }

    public function show($user_id, $book_id)//GET http://localhost:8000/users/2/books/2
    {   $book = Book::find($book_id);
        $book->user_id = $user_id;
        $book->save();

        return response()->json($book, 201);

    }

    public function destroy($user_id, $book_id)//DELETE http://localhost:8000/users/2/books/2
    {   $book = Book::find($book_id);
        if($book->user_id == $user_id){
            $book->user_id = null;
            $book->save();
            return response()->json($book, 200);
        }


        return response()->json(array(
                'error' => "user has't this book",
                'book' => $book),
                406
            );
    }
}
