<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /*
     * Show dashboard
     *
     *
    */
    public function index()
    {
    	return view('customLayouts/master');
    }
}
