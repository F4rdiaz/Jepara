<?php

namespace App\Http\Controllers;

use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        // Ambil berita terbaru, 10 per halaman
        $berita = Berita::latest()->paginate(10);

        // Hitung total semua berita untuk counter
        $totalPublikasi = Berita::count();

        // Ambil 5 berita populer (ubah sesuai kebutuhan, misalnya dari kolom 'views')
        $beritaPopuler = Berita::orderBy('created_at', 'desc')->take(5)->get();

        return view('berita', compact('berita', 'totalPublikasi', 'beritaPopuler'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('berita-show', compact('berita'));
    }
}
