@extends('layouts.app')

@section('title', 'Manajemen User')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">Daftar User</h1>

    <a href="{{ route('admin.users.create') }}" 
       class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
        + Tambah User
    </a>

    <div class="mt-6 overflow-x-auto bg-white dark:bg-gray-800 shadow-md rounded-lg">
        <table class="min-w-full text-left border border-gray-200 dark:border-gray-700">
            <thead class="bg-gray-100 dark:bg-gray-700 text-gray-700 dark:text-gray-200">
                <tr>
                    <th class="px-4 py-3 border dark:border-gray-700">#</th>
                    <th class="px-4 py-3 border dark:border-gray-700">Nama</th>
                    <th class="px-4 py-3 border dark:border-gray-700">Email</th>
                    <th class="px-4 py-3 border dark:border-gray-700">Role</th>
                    <th class="px-4 py-3 border dark:border-gray-700 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr class="hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-4 py-3 border dark:border-gray-700 text-gray-800 dark:text-gray-100">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3 border dark:border-gray-700 text-gray-800 dark:text-gray-100">{{ $user->name }}</td>
                    <td class="px-4 py-3 border dark:border-gray-700 text-gray-600 dark:text-gray-300">{{ $user->email }}</td>
                    <td class="px-4 py-3 border dark:border-gray-700">
                        <span class="px-2 py-1 text-sm rounded 
                            {{ $user->role === 'admin' 
                                ? 'bg-red-100 text-red-700 dark:bg-red-700 dark:text-red-100' 
                                : 'bg-green-100 text-green-700 dark:bg-green-700 dark:text-green-100' }}">
                            {{ ucfirst($user->role) }}
                        </span>
                    </td>
                    <td class="px-4 py-3 border dark:border-gray-700 text-center">
                        <a href="{{ route('admin.users.edit', $user->id) }}" 
                           class="text-blue-600 dark:text-blue-400 hover:underline">Edit</a> | 
                        <form action="{{ route('admin.users.destroy', $user->id) }}" 
                              method="POST" class="inline"
                              onsubmit="return confirm('Yakin hapus user ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 dark:text-red-400 hover:underline">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
