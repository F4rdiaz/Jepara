<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Ppid;
use Illuminate\Http\Request;

class InformasiPublikController extends Controller
{
    public function index()
    {
        // Ambil 5 berita terbaru
        $berita = Berita::latest()->take(5)->get();

        // Ambil 5 data PPID terbaru (jika ada)
        $ppid = class_exists(Ppid::class) ? Ppid::latest()->take(5)->get() : collect();

        return view('informasi-publik.index', compact('berita', 'ppid'));
    }

    public function ppid()
    {
        return view('informasi-publik.ppid');
    }

    public function laporan()
    {
        return view('informasi-publik.laporan');
    }

    public function dokumen()
    {
        return view('informasi-publik.dokumen');
    }
}
