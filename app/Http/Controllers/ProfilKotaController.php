<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilKotaController extends Controller
{
    public function index()
    {
        // Bisa diarahkan ke halaman daftar menu profil kota
        // atau langsung ke salah satu halaman seperti sambutan
        return view('profil-kota.index');
    }

    public function sambutan()
    {
        return view('profil-kota.sambutan');
    }

    public function sejarah()
    {
        return view('profil-kota.sejarah');
    }

    public function visimisi()
    {
        return view('profil-kota.visimisi');
    }
}
