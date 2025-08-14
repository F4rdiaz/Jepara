@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Daftar Layanan</h1>
    <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-3">Tambah Layanan</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($layanan as $l)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $l->nama }}</td>
                <td>{{ $l->deskripsi }}</td>
                <td>
                    <a href="{{ route('layanan.show', $l->id) }}" class="btn btn-info btn-sm">Lihat</a>
                    <a href="{{ route('layanan.edit', $l->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('layanan.destroy', $l->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Hapus layanan ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $layanan->links() }}
</div>
@endsection
