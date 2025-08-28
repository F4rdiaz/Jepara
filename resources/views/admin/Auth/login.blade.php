@extends('layouts.auth')

@section('title', 'Login - Diskominfo Jepara')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 via-blue-700 to-blue-500 px-4">
    <div class="w-full max-w-4xl bg-white rounded-2xl shadow-2xl overflow-hidden flex flex-col lg:flex-row">
        
        {{-- Bagian Kiri: Gambar --}}
        <div class="hidden lg:flex w-1/2 bg-gray-100 relative">
            <img src="{{ asset('images/login-bg.jpg') }}" 
                 alt="Diskominfo Jepara" 
                 class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-blue-900 bg-opacity-40 flex items-center justify-center">
                <img src="{{ asset('images/logo-jepara.png') }}" 
                     alt="Logo Diskominfo Jepara" 
                     class="h-28 w-28">
            </div>
        </div>

        {{-- Bagian Kanan: Form Login --}}
        <div class="w-full lg:w-1/2 p-8 lg:p-12 flex items-center justify-center">
            <div class="w-full">
                <h2 class="text-3xl font-bold text-center text-gray-800">Selamat Datang</h2>
                <p class="text-center text-gray-500 mt-2 mb-6">Silakan login untuk melanjutkan</p>
                
                <!-- Form Login -->
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                               class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                        @error('email')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input id="password" type="password" name="password" required
                               class="mt-1 block w-full rounded-xl border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200">
                        @error('password')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex items-center">
                        <input id="remember_me" type="checkbox" name="remember"
                               class="rounded border-gray-300 text-blue-600 focus:ring-blue-500">
                        <label for="remember_me" class="ml-2 block text-sm text-gray-600">Ingat saya</label>
                    </div>

                    <div class="flex flex-col space-y-3">
                        <button type="submit"
                                class="w-full py-3 rounded-xl bg-blue-600 hover:bg-blue-700 text-white font-semibold shadow-md">
                            Login
                        </button>

                        @if (Route::has('password.request'))
                            <a class="text-sm text-blue-600 hover:underline text-center"
                               href="{{ route('password.request') }}">
                                Lupa Password?
                            </a>
                        @endif
                    </div>
                </form>

                @if (Route::has('register'))
                <p class="text-center text-sm text-gray-600 mt-6">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="font-semibold text-blue-600 hover:underline">Daftar</a>
                </p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
