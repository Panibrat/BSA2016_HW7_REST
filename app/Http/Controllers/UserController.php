<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\Validator;
use DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return response()->json($users, 200);
    }


    public function show($id){

         $user = User::find($id);
        return response()->json($user, 200);

    }
    public function store(Request $request) //post /users
    {

        $rules = array(
            'name' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email|unique:users',

        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
            return response()->json($validator->messages(), 406);

        $user = new User;
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->save();
        return response()->json($user, 201);
    }
    public function update(Request $request, $id)
    {
        $rules = array(
            'name' => 'required|alpha',
            'lastname' => 'required|alpha',
            'email' => 'required|email|unique:users',

        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
            return response()->json($validator->messages(), 406);

        $user = User::find($id);
        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->save();
        return response()->json($user, 201);
    }

}