@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')
<div class="max-w-xl mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6 text-gray-800 dark:text-gray-100">Tambah User</h1>

    <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block mb-1 font-medium text-gray-800 dark:text-gray-200">Nama</label>
            <input type="text" name="name" class="w-full border dark:border-gray-700 rounded-lg px-3 py-2 bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100" required>
        </div>

        <div>
            <label class="block mb-1 font-medium text-gray-800 dark:text-gray-200">Email</label>
            <input type="email" name="email" class="w-full border dark:border-gray-700 rounded-lg px-3 py-2 bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100" required>
        </div>

        <div>
            <label class="block mb-1 font-medium text-gray-800 dark:text-gray-200">Password</label>
            <input type="password" name="password" class="w-full border dark:border-gray-700 rounded-lg px-3 py-2 bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100" required>
        </div>

        <div>
            <label class="block mb-1 font-medium text-gray-800 dark:text-gray-200">Role</label>
            <select name="role" class="w-full border dark:border-gray-700 rounded-lg px-3 py-2 bg-white dark:bg-gray-900 text-gray-800 dark:text-gray-100">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <button type="submit" 
                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">
            Simpan
        </button>
    </form>
</div>
@endsection
