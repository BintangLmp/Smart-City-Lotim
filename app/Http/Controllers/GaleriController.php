<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index()
    {
        $galeris = Galeri::all(); 
        return view('galeri.index', compact('galeris'));
    }
}
