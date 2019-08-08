<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showHomePage()
    {
    	return view('pages.login');
    }
}
