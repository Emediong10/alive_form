<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
 public function index()
    {
    return view('Home.content');
    }

    public function requirement()
    {
    return view('Requirement.first');
    }


    public function requirement_second()
    {
    return view('Requirement.second');
    }




}
