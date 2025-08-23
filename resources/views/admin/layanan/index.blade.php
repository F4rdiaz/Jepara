@extends('layouts.admin')

@section('title', 'Kelola Layanan')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center py-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Kelola Layanan</h1>
        <a href="{{ route('admin.layanan.create') }}" 
           class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">
            + Tambah Layanan
        </a>
    </div>

    <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded-lg">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">
                    <th class="px-4 py-3 text-left">#</th>
                    <th class="px-4 py-3 text-left">Nama Layanan</th>
                    <th class="px-4 py-3 text-left">Deskripsi</th>
                    <th class="px-4 py-3 text-left">Ikon</th>
                    <th class="px-4 py-3 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($layanan as $item)
                <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3 font-semibold">{{ $item->nama_layanan }}</td>
                    <td class="px-4 py-3 text-gray-600 dark:text-gray-300">{{ Str::limit($item->deskripsi, 50) }}</td>
                    <td class="px-4 py-3">
                        <i class="{{ $item->ikon }}"></i> {{ $item->ikon }}
                    </td>
                    <td class="px-4 py-3 flex justify-center gap-2">
                        <a href="{{ route('admin.layanan.edit', $item->id) }}" 
                           class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">
                            Edit
                        </a>
                        <form action="{{ route('admin.layanan.destroy', $item->id) }}" method="POST" 
                              onsubmit="return confirm('Yakin hapus layanan ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 transition">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-4 py-6 text-center text-gray-500">
                        Belum ada data layanan
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $layanan->links() }}
    </div>
</div>
@endsection
