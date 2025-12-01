<?php

// app/Http/Controllers/KoleksiController.php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // WAJIB: Import Storage facade

class KoleksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Tampilkan daftar koleksi.
     */
    public function index()
    {
        $koleksis = Koleksi::latest()->paginate(10);
        return view('koleksi.index', compact('koleksis'));
    }

    /**
     * Tampilkan form untuk membuat koleksi baru.
     */
    public function create()
    {
        return view('koleksi.create');
    }

    /**
     * Simpan koleksi baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tahun_perolehan' => 'nullable|integer|min:1900|max:' . date('Y'),
            'kondisi' => 'required|string|max:50',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi foto
        ]);

        $data = $request->all();

        // 1. Handle Upload Foto
        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('public/koleksi_photos');
            $data['foto'] = basename($path); // Ambil hanya nama filenya
        }

        Koleksi::create($data);

        return redirect()->route('koleksi.index')
            ->with('success', 'Barang koleksi berhasil ditambahkan!');
    }

    /**
     * Tampilkan detail koleksi tertentu.
     */
    public function show(Koleksi $koleksi)
    {
        return view('koleksi.show', compact('koleksi'));
    }

    /**
     * Tampilkan form untuk mengedit koleksi.
     */
    public function edit(Koleksi $koleksi)
    {
        return view('koleksi.edit', compact('koleksi'));
    }

    /**
     * Update koleksi tertentu di database.
     */
    public function update(Request $request, Koleksi $koleksi)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tahun_perolehan' => 'nullable|integer|min:1900|max:' . date('Y'),
            'kondisi' => 'required|string|max:50',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = $request->all();

        // 1. Handle Update Foto
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($koleksi->foto) {
                Storage::delete('public/koleksi_photos/' . $koleksi->foto);
            }
            // Simpan foto baru
            $path = $request->file('foto')->store('public/koleksi_photos');
            $data['foto'] = basename($path);
        }

        $koleksi->update($data);

        return redirect()->route('koleksi.index')
            ->with('success', 'Barang koleksi berhasil diperbarui!');
    }

    /**
     * Hapus koleksi dari database.
     */
    public function destroy(Koleksi $koleksi)
    {
        // Hapus file foto dari storage
        if ($koleksi->foto) {
            Storage::delete('public/koleksi_photos/' . $koleksi->foto);
        }

        $koleksi->delete();

        return redirect()->route('koleksi.index')
            ->with('success', 'Barang koleksi berhasil dihapus!');
    }
}