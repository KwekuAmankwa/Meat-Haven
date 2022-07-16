<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function admin()
    {
        return view('home.admin');
    }

    public function main()
    {
        return view('home.index');
    }
}
