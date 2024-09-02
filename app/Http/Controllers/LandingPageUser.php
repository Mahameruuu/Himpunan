<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageUser extends Controller
{
    public function index()
    {
        return view('user.LandingPage');
    }
}
