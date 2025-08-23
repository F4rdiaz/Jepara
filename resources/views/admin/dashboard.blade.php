@extends('layouts.app')

@section('content')
<div class="container-fluid py-4 bg-slate-900 min-vh-100 text-slate-100">
    <h2 class="mb-4 fw-bold text-white">📊 Dashboard</h2>

    <div class="row g-4">
        <!-- Users -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 text-white"
                 style="background: linear-gradient(135deg, #3b82f6, #1e3a8a); transition: transform .2s;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="card-title fw-semibold">Users</h5>
                        <p class="fs-3 fw-bold">{{ $usersCount }}</p>
                    </div>
                    <i class="bi bi-people-fill fs-1 opacity-75"></i>
                </div>
            </div>
        </div>

        <!-- Berita -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 text-white"
                 style="background: linear-gradient(135deg, #10b981, #065f46); transition: transform .2s;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="card-title fw-semibold">Berita</h5>
                        <p class="fs-3 fw-bold">{{ $beritaCount }}</p>
                    </div>
                    <i class="bi bi-newspaper fs-1 opacity-75"></i>
                </div>
            </div>
        </div>

        <!-- Layanan -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 text-white"
                 style="background: linear-gradient(135deg, #facc15, #ca8a04); transition: transform .2s;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="card-title fw-semibold">Layanan</h5>
                        <p class="fs-3 fw-bold">{{ $layananCount }}</p>
                    </div>
                    <i class="bi bi-gear-fill fs-1 opacity-75"></i>
                </div>
            </div>
        </div>

        <!-- Galeri -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 text-white"
                 style="background: linear-gradient(135deg, #ec4899, #9d174d); transition: transform .2s;">
                <div class="card-body d-flex align-items-center justify-content-between">
                    <div>
                        <h5 class="card-title fw-semibold">Galeri</h5>
                        <p class="fs-3 fw-bold">{{ $galeriCount }}</p>
                    </div>
                    <i class="bi bi-images fs-1 opacity-75"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- Grafik --}}
    <div class="mt-5 p-4 rounded shadow-lg bg-slate-800">
        <h4 class="mb-3 text-white">Grafik Aktivitas</h4>
        <canvas id="dashboardChart" height="100"></canvas>
    </div>
</div>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('dashboardChart');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Users', 'Berita', 'Layanan', 'Galeri'],
            datasets: [{
                label: 'Jumlah Data',
                data: [{{ $usersCount }}, {{ $beritaCount }}, {{ $layananCount }}, {{ $galeriCount }}],
                backgroundColor: ['#3b82f6', '#10b981', '#facc15', '#ec4899'],
                borderRadius: 6
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { 
                y: { beginAtZero: true, ticks: { color: '#f8fafc' }, grid: { color: '#334155' } },
                x: { ticks: { color: '#f8fafc' }, grid: { color: '#334155' } }
            }
        }
    });
</script>
@endsection
