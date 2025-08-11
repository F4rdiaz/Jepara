@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto py-10">
    <h1 class="text-3xl font-bold mb-6">Profil Kota Jepara</h1>
    <ul class="space-y-4">
        <li>
            <a href="{{ route('profil.sambutan') }}" class="text-blue-600 hover:underline">
                Sambutan Walikota
            </a>
        </li>
        <li>
            <a href="{{ route('profil.sejarah') }}" class="text-blue-600 hover:underline">
                Sejarah Kota
            </a>
        </li>
        <li>
            <a href="{{ route('profil.visimisi') }}" class="text-blue-600 hover:underline">
                Visi & Misi
            </a>
        </li>
    </ul>
</div>
@endsection
