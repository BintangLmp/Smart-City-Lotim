<?php

namespace App\Http\Controllers;

use App\Models\Destinasi;
use Illuminate\Http\Request;

class DestinasiController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::paginate(12);
        return view('destinasi.index', compact('destinasi'));
    }

    public function show(Destinasi $destinasi)
    {
        return view('destinasi.show', compact('destinasi'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'lokasi' => 'required|string',
            'rating' => 'nullable|numeric|min:0|max:5',
            'harga' => 'required|string',
            'jam_operasional' => 'required|string',
        ]);

        try {
            // Simpan file gambar ke storage
            if ($request->hasFile('gambar')) {
                $filePath = $request->file('gambar')->store('destinasi', 'public');
                $validated['gambar'] = $filePath;
            }

            Destinasi::create($validated);

            return redirect()->route('destinasi.index')->with('success', 'Destinasi berhasil dibuat.');
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Gagal menyimpan data: ' . $e->getMessage()]);
        }
    }

}
