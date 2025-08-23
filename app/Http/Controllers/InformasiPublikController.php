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

    public function apbd()
    {
        return view('informasi-publik.apbd');
    }

    public function apbdShow($year)
    {
        // Contoh data dummy dulu (nanti bisa kamu ambil dari DB / storage)
        $data = [
            2025 => [
                'title' => 'Perda APBD dan Lampirannya Tahun 2025',
                'file'  => asset('storage/apbd/apbd-2025.pdf'),
                'lampiran' => [
                    ['nama' => 'Ringkasan APBD 2025', 'file' => asset('storage/apbd/ringkasan-2025.pdf')],
                    ['nama' => 'Lampiran Belanja 2025', 'file' => asset('storage/apbd/belanja-2025.pdf')],
                ]
            ],
            2024 => [
                'title' => 'Perda APBD dan Lampirannya Tahun 2024',
                'file'  => asset('storage/apbd/apbd-2024.pdf'),
                'lampiran' => [
                    ['nama' => 'Ringkasan APBD 2024', 'file' => asset('storage/apbd/ringkasan-2024.pdf')],
                    ['nama' => 'Lampiran Belanja 2024', 'file' => asset('storage/apbd/belanja-2024.pdf')],
                ]
            ],
        ];

        // Kalau data tahun tidak ada, balik ke halaman APBD utama
        if (!array_key_exists($year, $data)) {
            return redirect()->route('informasi-publik.apbd');
        }

        return view('informasi-publik.apbd-show', [
            'year' => $year,
            'apbd' => $data[$year]
        ]);
    }
}
