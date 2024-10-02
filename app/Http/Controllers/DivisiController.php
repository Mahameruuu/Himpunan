<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $divisis = Divisi::all();
        return view('divisi.Divisi', compact('divisis'));
    }

    public function create()
    {
        return view('divisi.TambahDivisi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_divisi' => 'required|string|max:255',
            'jumlah_anggota' => 'required|integer|min:0',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        Divisi::create($request->all());

        return redirect()->route('divisi.index')->with('success', 'Divisi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $divisi = Divisi::findOrFail($id);
        return view('divisi.EditDivisi', compact('divisi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_divisi' => 'required|string|max:255',
            'jumlah_anggota' => 'required|integer|min:0',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        $divisi = Divisi::findOrFail($id);
        $divisi->update($request->all());

        return redirect()->route('divisi.index')->with('success', 'Divisi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $divisi = Divisi::findOrFail($id);
        $divisi->delete();

        return redirect()->route('divisi.index')->with('success', 'Divisi berhasil dihapus');
    }
}
