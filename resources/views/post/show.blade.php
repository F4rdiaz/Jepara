@extends('layouts.app')

@section('title', $post->title)

@section('content')
<div class="max-w-3xl mx-auto p-6">
    <h1 class="text-3xl font-bold mb-2">{{ $post->title }}</h1>
    <p class="text-gray-600 mb-6">Ditulis oleh: {{ $post->user->name ?? 'Anonim' }}</p>

    <div class="prose max-w-none">
        {!! nl2br(e($post->content)) !!}
    </div>

    <div class="mt-6">
        <a href="{{ route('posts.index') }}" class="text-blue-600">← Kembali ke daftar</a>
    </div>
</div>
@endsection
