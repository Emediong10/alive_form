<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

 public function index()
    {
    return view('Home.content');
    }

    public function register()
    {
       return view('Eligibility.registration');
    }

    public function registration()
    {
        return view('Home.registration');
    }

    public function requirement()
    {
    return view('Requirement.first');
    }


    public function requirement_second()
    {
    return view('Requirement.second');
    }

    public function eligibility()
    {
    return view('Eligibility.form');
    }


    public function eligible()
    {
    return view('Eligibility.eligible');
    }


    public function membership_policies()
    {
    return view('Eligibility.membership_policy');
    }


}
