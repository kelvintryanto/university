<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AllStudentController extends Controller
{
    public function view()
    {
    	return view('pages.allstudent');
    }
}
