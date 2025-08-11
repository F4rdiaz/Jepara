@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="fw-bold mb-4 text-center text-danger">Pejabat Pengelola Informasi dan Dokumentasi (PPID)</h2>
    <p class="text-secondary text-center mb-5 fs-5">
        PPID bertugas menyediakan layanan informasi publik yang transparan, cepat, dan akurat sesuai Undang-Undang Keterbukaan Informasi Publik.
    </p>

    <div class="row g-4">
        <!-- Card Tugas PPID -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100 rounded-4 p-3" style="border-left: 6px solid #dc3545;">
                <div class="card-body">
                    <h5 class="fw-bold text-danger mb-4">Tugas PPID</h5>
                    <ul class="list-unstyled fs-6">
                        @foreach ([
                            'Menyediakan dan mengelola informasi publik.',
                            'Memberikan pelayanan informasi kepada masyarakat.',
                            'Menjamin keterbukaan informasi yang akurat dan mutakhir.',
                            'Mengelola dokumentasi dan data publik.'
                        ] as $tugas)
                        <li class="d-flex align-items-start mb-3">
                            <span class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 28px; height: 28px;">
                                <i class="bi bi-check2"></i>
                            </span>
                            <span class="text-light">{{ $tugas }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!-- Card Layanan PPID -->
        <div class="col-md-6">
            <div class="card shadow-sm border-0 h-100 rounded-4 p-3" style="border-left: 6px solid #dc3545;">
                <div class="card-body">
                    <h5 class="fw-bold text-danger mb-4">Layanan PPID</h5>
                    <ul class="list-unstyled fs-6">
                        @foreach ([
                            'Permintaan Informasi Publik.',
                            'Penyediaan Data dan Dokumen Publik.',
                            'Pengajuan Keberatan.',
                            'Pengelolaan Pengaduan Masyarakat.'
                        ] as $layanan)
                        <li class="d-flex align-items-start mb-3">
                            <span class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 28px; height: 28px;">
                                <i class="bi bi-check2"></i>
                            </span>
                            <span class="text-light">{{ $layanan }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Efek hover card --}}
<style>
    .card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 20px rgba(220, 53, 69, 0.3);
        transition: all 0.3s ease;
    }
</style>
@endsection
