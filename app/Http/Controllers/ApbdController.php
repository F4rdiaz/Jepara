<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApbdController extends Controller
{
    private $apbdList = [
        2025 => ['title' => 'APBD Kabupaten Jepara Tahun 2025', 'date' => '22 Januari 2025', 'file' => 'storage/apbd/apbd-2025.pdf'],
        2024 => ['title' => 'APBD Kabupaten Jepara Tahun 2024', 'date' => '28 Oktober 2024', 'file' => 'storage/apbd/apbd-2024.pdf'],
        2023 => ['title' => 'APBD Kabupaten Jepara Tahun 2023', 'date' => '4 Januari 2023', 'file' => 'storage/apbd/apbd-2023.pdf'],
        2022 => ['title' => 'APBD Kabupaten Jepara Tahun 2022', 'date' => '22 Februari 2022', 'file' => 'storage/apbd/apbd-2022.pdf'],
    ];

    // Halaman daftar APBD
    public function index()
    {
        $apbdList = $this->apbdList;
        return view('informasi-publik.apbd', compact('apbdList'));
    }

    // Halaman detail per tahun
    public function show($year)
    {
        if (!isset($this->apbdList[$year])) {
            abort(404, 'Data APBD tidak ditemukan');
        }

        $apbd = $this->apbdList[$year];

        return view('informasi-publik.apbd-show', compact('apbd', 'year'));
    }
}
