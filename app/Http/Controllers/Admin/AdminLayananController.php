<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use Illuminate\Http\Request;

class AdminLayananController extends Controller
{
    // Tampilkan semua Layanan di admin
    public function index()
    {
        $layanan = Layanan::latest()->paginate(10);
        return view('admin.layanan.index', compact('layanan'));
    }

    // Form tambah Layanan baru
    public function create()
    {
        return view('admin.layanan.create');
    }

    // Simpan Layanan baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'ikon' => 'nullable|string',
        ]);

        Layanan::create($request->all());

        return redirect()->route('admin.admin-layanan.index')->with('success', 'Layanan berhasil ditambahkan.');
    }

    // Tampilkan detail Layanan
    public function show(Layanan $admin_layanan)
    {
        return view('admin.layanan.show', ['layanan' => $admin_layanan]);
    }

    // Form edit Layanan
    public function edit(Layanan $admin_layanan)
    {
        return view('admin.layanan.edit', ['layanan' => $admin_layanan]);
    }

    // Update Layanan
    public function update(Request $request, Layanan $admin_layanan)
    {
        $request->validate([
            'nama_layanan' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'ikon' => 'nullable|string',
        ]);

        $admin_layanan->update($request->all());

        return redirect()->route('admin.admin-layanan.index')->with('success', 'Layanan berhasil diperbarui.');
    }

    // Hapus Layanan
    public function destroy(Layanan $admin_layanan)
    {
        $admin_layanan->delete();
        return redirect()->route('admin.admin-layanan.index')->with('success', 'Layanan berhasil dihapus.');
    }
}
