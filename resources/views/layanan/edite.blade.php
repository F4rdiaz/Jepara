@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Layanan</h1>
    <form action="{{ route('layanan.update', $layanan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Nama Layanan</label>
            <input type="text" name="nama" class="form-control" value="{{ $layanan->nama }}" required>
        </div>
        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="deskripsi" class="form-control" required>{{ $layanan->deskripsi }}</textarea>
        </div>
        <button class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
