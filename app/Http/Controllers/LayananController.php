<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
        // Grid statis yang kamu buat di blade
        return view('layanan');
    }
}
