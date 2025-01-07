<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }

    public function latar()
    {
        return view('about.latar-belakang');
    }

    public function visimisi()
    {
        return view('about.visi-misi');
    }

    public function structural()
    {
        return view('about.structural');
    }
}