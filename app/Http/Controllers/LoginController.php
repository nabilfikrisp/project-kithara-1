<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function visitLogin()
    {
        return view('login');
    }
    
}
