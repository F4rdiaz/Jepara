<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        // Contoh mengembalikan view galeri/index.blade.php
        return view('galeri');
    }
}
