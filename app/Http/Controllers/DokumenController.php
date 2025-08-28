<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokumenController extends Controller
{
    private $categories = [
        ['id' => 1, 'nama' => 'Perencanaan Kinerja'],
        ['id' => 2, 'nama' => 'Pengukuran Kinerja'],
        ['id' => 3, 'nama' => 'Perencanaan Daerah'],
        ['id' => 4, 'nama' => 'Keuangan Daerah'],
        ['id' => 5, 'nama' => 'Dokumen Pelaporan'],
        ['id' => 6, 'nama' => 'Publikasi'],
    ];

    public function index()
    {
        $categories = collect($this->categories);

        // Dummy dokumen umum
        $dokumens = [
            (object) ['judul' => 'APBD 2025', 'file' => 'apbd-2025.pdf'],
            (object) ['judul' => 'Laporan Kinerja 2024', 'file' => 'laporan-2024.pdf'],
            (object) ['judul' => 'TL LHE SAKIP', 'file' => 'tl-lhe-sakip.pdf'],
            (object) ['judul' => 'SOP Pengumpulan Data Kinerja', 'file' => 'sop-pengumpulan.pdf'],
            (object) ['judul' => 'SK IKU 2024', 'file' => 'sk-iku-2024.pdf'],
            (object) ['judul' => 'RKT 2024', 'file' => 'rkt-2024.pdf'],
            (object) ['judul' => 'Renstra 2024-2025', 'file' => 'renstra-2024.pdf'],
            (object) ['judul' => 'Laporan Keuangan Daerah 2023', 'file' => 'laporan-keuangan-2023.pdf'],
            (object) ['judul' => 'Dokumen Evaluasi Kinerja 2022', 'file' => 'evaluasi-2022.pdf'],
            (object) ['judul' => 'APBD 2025', 'file' => 'apbd-2025.pdf'],
            (object) ['judul' => 'RPJMD 2024-2029', 'file' => 'rpjmd-2024.pdf'],
            (object) ['judul' => 'RKPD 2025', 'file' => 'rkpd-2025.pdf'],
            (object) ['judul' => 'Laporan Tahunan 2023', 'file' => 'laporan-2023.pdf'],
            (object) ['judul' => 'Dokumen Publikasi Statistik 2024', 'file' => 'publikasi-statistik-2024.pdf'],
        ];

        return view('informasi-publik.dokumen', [
            'categories' => $categories,
            'dokumens'   => $dokumens,
            'title'      => 'Semua Dokumen',
        ]);
    }

    public function kategori($id)
    {
        $categories = collect($this->categories);
        $selectedCategory = $categories->firstWhere('id', (int) $id);

        // Dummy dokumen per kategori
        $dokumens = [
            (object) ['judul' => 'Dokumen ' . $selectedCategory['nama'], 'file' => 'contoh.pdf'],
        ];

        return view('informasi-publik.dokumen', [
            'categories' => $categories,
            'dokumens'   => $dokumens,
            'title'      => $selectedCategory['nama'],
        ]);
    }
}
