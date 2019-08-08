<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListJobPostController extends Controller
{
    public function view()
    {
    	return view('pages.listjobpost');
    }
}
