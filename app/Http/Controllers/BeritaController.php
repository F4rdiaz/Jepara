<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class BeritaController extends Controller
{
    /**
     * Kategori yang diizinkan (sinkron dengan ENUM di DB)
     */
    private const KATEGORI = [
        'bencana', 'ekonomi', 'infrastruktur', 'kesehatan', 'pendidikan', 'teknologi',
    ];

    /**
     * LISTING PUBLIC: filter kategori + search + pagination
     * GET /berita?kategori=...&search=...
     */
    public function index(Request $request)
    {
        $query = Berita::query();

        // Filter kategori (abaikan jika 'semua' atau kosong)
        $kategori = $request->query('kategori', 'semua');
        if (in_array($kategori, self::KATEGORI, true)) {
            $query->where('kategori', $kategori);
        }

        // Search by judul
        $search = trim((string) $request->query('search', ''));
        if ($search !== '') {
            $query->where('judul', 'like', "%{$search}%");
        }

        $beritas = $query->orderByDesc('created_at')
            ->paginate(9)
            ->appends($request->only('kategori', 'search'));

        return view('berita.index', compact('beritas'));
    }

    /**
     * DETAIL PUBLIC
     * GET /berita/{berita}
     * (Gunakan route model binding di routes)
     */
    public function show(Berita $berita)
    {
        return view('berita.show', compact('berita'));
    }

    /**
     * FORM CREATE (ADMIN)
     * GET /admin/berita/create
     */
    public function create()
    {
        $kategoris = self::KATEGORI;
        return view('admin.berita.create', compact('kategoris'));
    }

    /**
     * SIMPAN DATA (ADMIN)
     * POST /admin/berita
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul'    => ['required', 'string', 'max:255'],
            'kategori' => ['required', Rule::in(self::KATEGORI)],
            'konten'   => ['required', 'string'],
            'gambar'   => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:3072'], // 3MB
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create($validated);

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    /**
     * FORM EDIT (ADMIN)
     * GET /admin/berita/{berita}/edit
     */
    public function edit(Berita $berita)
    {
        $kategoris = self::KATEGORI;
        return view('admin.berita.edit', compact('berita', 'kategoris'));
    }

    /**
     * UPDATE DATA (ADMIN)
     * PUT/PATCH /admin/berita/{berita}
     */
    public function update(Request $request, Berita $berita)
    {
        $validated = $request->validate([
            'judul'    => ['required', 'string', 'max:255'],
            'kategori' => ['required', Rule::in(self::KATEGORI)],
            'konten'   => ['required', 'string'],
            'gambar'   => ['nullable', 'image', 'mimes:jpg,jpeg,png,webp', 'max:3072'], // 3MB
        ]);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('berita', 'public');
        }

        $berita->update($validated);

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    /**
     * HAPUS DATA (ADMIN)
     * DELETE /admin/berita/{berita}
     */
    public function destroy(Berita $berita)
    {
        if ($berita->gambar) {
            Storage::disk('public')->delete($berita->gambar);
        }
        $berita->delete();

        return back()->with('success', 'Berita berhasil dihapus.');
    }
}
