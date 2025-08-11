@extends('layouts.app')

@section('title', 'Kontak -Pemerintah Kota Jepara')

@section('content')
<section class="bg-gradient-to-b from-indigo-100 to-white py-16 w-full">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-16">
        
        <div class="mb-4">
            <span class="inline-block bg-red-100 text-red-600 font-semibold px-3 py-1 rounded-md text-sm">Kontak Kami</span>
        </div>

        <h1 class="text-4xl font-extrabold text-gray-900 mb-4">Kami Siap Membantu</h1>
        <p class="text-gray-700 text-lg mb-10 max-w-2xl">
            Hubungi kami untuk informasi lebih lanjut atau pertanyaan terkait layanan kami.
            Tim kami siap memberikan bantuan yang Anda butuhkan.
        </p>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
            
            {{-- Kontak & Sosial --}}
            <div class="space-y-8">
                
                {{-- Sosial Media --}}
                <div class="flex space-x-4">
                    <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-full">
                        <img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" alt="Facebook" class="w-6 h-6">
                    </a>
                    <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-full">
                        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384031.png" alt="Instagram" class="w-6 h-6">
                    </a>
                    <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-full">
                        <img src="https://cdn-icons-png.flaticon.com/512/3670/3670151.png" alt="X" class="w-6 h-6">
                    </a>
                    <a href="#" class="bg-gray-100 hover:bg-gray-200 p-3 rounded-full">
                        <img src="https://cdn-icons-png.flaticon.com/512/1384/1384060.png" alt="YouTube" class="w-6 h-6">
                    </a>
                </div>

                {{-- Email --}}
                <div class="flex items-center space-x-4">
                    <div class="bg-red-500 text-white p-3 rounded-full">
                        <img src="{{ asset('images/email.png') }}" alt="Email" class="w-5 h-5">
                    </div>
                    <div class="border-l pl-4 border-gray-300">

                        <p class="text-base font-medium text-gray-800">diskominfo@jepara.go.id</p>
                    </div>
                </div>

                {{-- Alamat --}}
                <div class="flex items-center space-x-4">
                    <div class="bg-red-500 text-white p-3 rounded-full">
                        <img src="{{ asset('images/lokasi.png') }}" alt="Alamat" class="w-5 h-5">
                    </div>
                    <div class="border-l pl-4 border-gray-300">

                        <p class="text-base font-medium text-gray-800">
                            Gedung OPD Bersama, Jl. Kartini No.1, Panggang I, Panggang, Kec. Jepara, Kabupaten Jepara, Jawa Tengah
                        </p>
                    </div>
                </div>

            </div>

            {{-- Peta --}}
            <div>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.5160535658874!2d110.6651682!3d-6.591509699999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e711f0321765631%3A0x79188af8cb42f959!2sDinas%20Komunikasi%20dan%20Informatika%20(DIS%20KOMINFO)%20Kabupaten%20Jepara!5e0!3m2!1sid!2sid!4v1691742445155!5m2!1sid!2sid" 
                    width="100%" height="380" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="rounded-xl shadow-lg w-full">
                </iframe>
            </div>

        </div>
    </div>
</section>
@endsection
