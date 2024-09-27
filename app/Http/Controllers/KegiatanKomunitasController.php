<?php

namespace App\Http\Controllers;

use App\Models\KegiatanKomunitas;
use App\Models\Komunitas;
use Illuminate\Http\Request;
use Storage;

class KegiatanKomunitasController extends Controller
{
    public function index()
    {
        // Mengambil kegiatan komunitas beserta relasi komunitas
        $kegiatan_komunitas = KegiatanKomunitas::with('komunitas')->get();
        return view('komunitas.KegiatanKomunitas', compact('kegiatan_komunitas'));
    }

    public function create()
    {
        // Mengambil semua komunitas untuk form create
        $komunitas = Komunitas::all();
        return view('komunitas.TambahKegiatanKomunitas', compact('komunitas'));
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'deskripsi' => 'required',
            'tanggal_kegiatan' => 'required|date',
            'foto' => 'image|nullable|max:1999',
            'komunitas_id' => 'required|exists:komunitas,id', 
        ]);

        // Menyimpan foto jika ada
        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->store('kegiatan_foto', 'public');
            $validated['foto'] = $filename;
        }

        // Membuat kegiatan komunitas baru
        KegiatanKomunitas::create($validated);

        // Redirect ke halaman index kegiatan komunitas
        return redirect()->route('kegiatan_komunitas.index')->with('success', 'Kegiatan Komunitas created successfully');
    }

    public function edit($id)
    {
        $kegiatan_komunitas = KegiatanKomunitas::findOrFail($id);
        $komunitas = Komunitas::all();
        return view('komunitas.EditKegiatanKomunitas', compact('kegiatan_komunitas', 'komunitas'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_kegiatan' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_kegiatan' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'komunitas_id' => 'required|exists:komunitas,id', 
        ]);

        // Mengambil kegiatan komunitas berdasarkan id
        $kegiatan_komunitas = KegiatanKomunitas::findOrFail($id);

        $kegiatan_komunitas->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan_komunitas->deskripsi = $request->deskripsi;
        $kegiatan_komunitas->tanggal_kegiatan = $request->tanggal_kegiatan;
        $kegiatan_komunitas->komunitas_id = $request->komunitas_id;

        if ($request->hasFile('foto')) {
            if ($kegiatan_komunitas->foto) {
                Storage::delete('public/' . $kegiatan_komunitas->foto);
            }
            $path = $request->file('foto')->store('kegiatan_foto', 'public');
            $kegiatan_komunitas->foto = $path;
        }

        $kegiatan_komunitas->save();

        return redirect()->route('kegiatan_komunitas.index')->with('success', 'Kegiatan Komunitas berhasil diupdate');
    }

    public function destroy($id)
    {
        $kegiatan_komunitas = KegiatanKomunitas::findOrFail($id);        
       
        if ($kegiatan_komunitas->foto) {
            Storage::delete('public/' . $kegiatan_komunitas->foto);
        }

        $kegiatan_komunitas->delete();
        return redirect()->route('kegiatan_komunitas.index')->with('success', 'Kegiatan Komunitas deleted successfully');
    }
}
