<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $kegiatans = Kegiatan::all();
        return view('kegiatan.Kegiatan', compact('kegiatans'));
    }

    public function create()
    {
        return view('kegiatan.TambahKegiatan');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $kegiatan = new Kegiatan();
        $kegiatan->nama_kegiatan = $validated['nama_kegiatan'];
        $kegiatan->tanggal = $validated['tanggal'];
        $kegiatan->deskripsi = $validated['deskripsi'];

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('uploads', 'public');
            $kegiatan->foto = $path;
        }

        $kegiatan->save();

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.EditKegiatan', compact('kegiatan'))->render();
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->nama_kegiatan = $validated['nama_kegiatan'];
        $kegiatan->tanggal = $validated['tanggal'];
        $kegiatan->deskripsi = $validated['deskripsi'];

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('uploads', 'public');
            $kegiatan->foto = $path;
        }

        $kegiatan->save();

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui!');
    }

    public function show($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        return view('kegiatan.show', compact('kegiatan'));
    }

    public function destroy($id)
    {
        $kegiatan = Kegiatan::findOrFail($id);
        $kegiatan->delete();

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus!');
    }
}
