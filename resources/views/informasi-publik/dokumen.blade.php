@extends('layouts.app') 

@section('title', $title)

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-2xl md:text-3xl font-bold mb-6 text-gray-900 dark:text-gray-100">
        {{ $title }}
    </h1>

    <div class="bg-white dark:bg-gray-900 shadow-lg rounded-2xl overflow-hidden">
        <div class="p-4">
            <table id="dokumenTable" class="w-full text-sm text-left text-gray-700 dark:text-gray-300">
                <thead class="bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-gray-100">
                    <tr>
                        <th scope="col" class="px-6 py-3">Aksi</th>
                        <th scope="col" class="px-6 py-3">Nama Dokumen</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dokumens as $dok)
                        <tr class="border-b dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-800">
                            <td class="px-6 py-4">
                                <a href="{{ asset('storage/dokumen/'.$dok->file) }}" 
                                   class="inline-flex items-center justify-center px-3 py-2 bg-sky-500 text-white rounded-lg shadow hover:bg-sky-600 transition"
                                   download>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                                    </svg>
                                </a>
                            </td>
                            <td class="px-6 py-4 font-medium">
                                {{ $dok->judul }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="px-6 py-4 text-center text-gray-500">
                                Belum ada dokumen.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- DataTables CDN --}}
@push('scripts')
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function () {
        $('#dokumenTable').DataTable({
            "pageLength": 10,
            "lengthMenu": [ [10, 20, 50, 100], [10, 20, 50, 100] ],
            "language": {
                "search": "Cari Dokumen:",
                "searchPlaceholder": "Ketik nama dokumen...",
                "lengthMenu": "Tampilkan _MENU_ dokumen per halaman",
                "zeroRecords": "Tidak ada dokumen ditemukan",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ dokumen",
                "infoEmpty": "Tidak ada dokumen tersedia",
                "infoFiltered": "(disaring dari total _MAX_ dokumen)",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Berikutnya",
                    "previous": "Sebelumnya"
                }
            }
        });
    });
</script>
@endpush
@endsection
