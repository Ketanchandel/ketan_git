<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homeontroller extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
