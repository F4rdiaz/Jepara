<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home'); // pastikan file home.blade.php ada
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Contoh: sementara hanya menampilkan query
        // nanti bisa diganti dengan logika pencarian database
        return view('search.results', compact('query'));
    }
}
