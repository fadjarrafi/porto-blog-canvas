<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // view page
    public function index()
    {
        return view('home');
    }
}
