<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IpkdController extends Controller
{
    private $dokumen = [
        [
            'id' => 1,
            'judul' => 'RKPD Kabupaten Jepara Tahun 2023',
            'tahun' => 2023,
            'file' => 'rkpd-2023.pdf'
        ],
        [
            'id' => 2,
            'judul' => 'KUA Tahun Anggaran 2023',
            'tahun' => 2023,
            'file' => 'kua-2023.pdf'
        ],
        [
            'id' => 3,
            'judul' => 'PPAS Tahun 2023',
            'tahun' => 2023,
            'file' => 'ppas-2023.pdf'
        ],
    ];

    public function index()
    {
        $dokumen = $this->dokumen;

        return view('informasi-publik.ipkd', compact('dokumen'));
    }

    public function show($id)
    {
        $dokumen = collect($this->dokumen)->firstWhere('id', (int) $id);
        if (!$dokumen) {
            abort(404);
        }

        return view('informasi-publik.ipkd-show', compact('dokumen'));
    }
}
