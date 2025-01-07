<?php

namespace App\Http\Controllers;

use App\Models\Dimensi;
use Illuminate\Http\Request;

class DimensiController extends Controller
{
    public function index()
    {
        $dimensi = Dimensi::all();
        return view('dimensi.index', compact('dimensi'));
    }
    public function show($slug)
    {
        $dimensi = Dimensi::where('slug', $slug)->firstOrFail();
        return view('dimensi.show', compact('dimensi'));
    }
}
