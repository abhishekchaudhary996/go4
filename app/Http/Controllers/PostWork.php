<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PostWork extends Controller
{
    public function index()
    {
    	return view('pages.post_work');
    }
}
