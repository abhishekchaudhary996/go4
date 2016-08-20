<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Repository extends Controller
{
    public function new_repo()
    {
    	return view('pages.Repository.new_repo');
    }

    public function public_repo()
    {
    	return view('pages.Repository.public_repo');
    }

    public function private_repo()
    {
    	return view('pages.Repository.private_repo');
    }

    public function repo_history()
    {
    	return view('pages.Repository.repo_history');
    }
}
