<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestRedirectController extends Controller
{
    function homePage(){
        return redirect('/dashboard', 302);
    }

    function dashboardPage(){
        return 'Dashboard';
    }
}
