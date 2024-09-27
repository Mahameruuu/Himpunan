<?php

namespace App\Http\Controllers;

use App\Models\Komunitas;
use Illuminate\Http\Request;
use Storage;

class KomunitasController extends Controller
{
    public function index()
    {
        $komunitas = Komunitas::all();
        return view('komunitas.Komunitas', compact('komunitas'));
    }

    public function create()
    {
        return view('komunitas.TambahKomunitas');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_komunitas' => 'required|string|max:255',
            'deskripsi' => 'required',
            'tanggal_didirikan' => 'required|date',
            'foto' => 'image|nullable|max:1999',
        ]);

        // Handle file upload
        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->store('komunitas_foto', 'public');
            $validated['foto'] = $filename;
        }

        Komunitas::create($validated);
        return redirect()->route('komunitas.index')->with('success', 'Komunitas created successfully');
    }

    public function edit($id)
    {
        $komunitas = Komunitas::findOrFail($id);
        return view('komunitas.EditKomunitas', compact('komunitas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_komunitas' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_didirikan' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $komunitas = Komunitas::findOrFail($id);

        $komunitas->nama_komunitas = $request->nama_komunitas;
        $komunitas->deskripsi = $request->deskripsi;
        $komunitas->tanggal_didirikan = $request->tanggal_didirikan;

        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($komunitas->foto) {
                Storage::delete('public/' . $komunitas->foto);
            }
            // Simpan foto baru
            $path = $request->file('foto')->store('komunitas', 'public');
            $komunitas->foto = $path;
        }

        $komunitas->save();

        return redirect()->route('komunitas.index')->with('success', 'Komunitas berhasil diupdate');
    }

    public function destroy($id)
    {
        $komunitas = Komunitas::findOrFail($id);
        $komunitas->delete();

        return redirect()->route('komunitas.index')->with('success', 'Komunitas deleted successfully');
    }
}
