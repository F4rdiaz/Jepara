@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="fw-bold mb-4 text-center text-danger">Berita Terbaru</h2>

    <div class="row g-4">
        @foreach(range(1, 6) as $i)
        <div class="col-md-4">
            <div class="card shadow-sm border-0 h-100">
                <img src="{{ asset('images/berita-' . $i . '.jpg') }}" class="card-img-top" alt="Berita {{ $i }}">
                <div class="card-body d-flex flex-column">
                    <h5 class="fw-bold">Judul Berita {{ $i }}</h5>
                    <p class="text-muted small flex-grow-1">
                        Ringkasan singkat berita ini yang menarik perhatian pembaca agar mau membaca selengkapnya.
                    </p>
                    <a href="#" class="btn btn-outline-danger btn-sm mt-auto">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
