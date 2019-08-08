<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyListController extends Controller
{
    public function view()
    {
    	return view('pages.companylist');
    }
}
