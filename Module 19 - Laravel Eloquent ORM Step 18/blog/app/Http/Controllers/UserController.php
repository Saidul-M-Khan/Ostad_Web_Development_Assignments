<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUsers(){
        return User::all();
    }

    function getUserById(Request $request){
        return User::find($request->userId);
    }

    function addUser(Request $request){
        return User::create($request->input());
    }

    function updateUser(Request $request){
        return User::where('id', $request->userId)->update($request->input());
    }

    function deleteUser(Request $request){
        return User::where('id', '=' , $request->userId)->delete();
    }
}
