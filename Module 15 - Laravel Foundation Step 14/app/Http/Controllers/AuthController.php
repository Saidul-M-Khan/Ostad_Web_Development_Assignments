<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function profile(){
        return 'Profile';
    }

    function settings(){
        return 'Settings';
    }

    function login(){
        return 'You are not authorized. Login now.';
    }
}
