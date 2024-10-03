<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Divisi;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AnggotaController extends Controller
{
    public function index()
    {
        $anggotas = Anggota::all(); 
        return view('anggota.Anggota', compact('anggotas'));
    }

    public function landingPage()
    {
    $anggotas = Anggota::all(); 
    
    return view('user.LandingPage', compact('anggotas'));
    }


    public function create()
    {
        $divisis = Divisi::where('status', 'aktif')->get();
        return view('anggota.TambahAnggota', compact('divisis'));
    }

    public function store(Request $request)
{
    $validated = $request->validate([
        'nama' => 'required|string|max:255',
        'npm' => 'required|string|max:20|unique:anggotas,npm',
        'jabatan' => 'required|string|max:255',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $anggota = new Anggota();
    $anggota->nama = $validated['nama'];
    $anggota->npm = $validated['npm'];
    $anggota->jabatan = $validated['jabatan'];

    if ($request->hasFile('foto')) {
        $path = $request->file('foto')->store('uploads', 'public');
        $anggota->foto = $path;
    }

    $anggota->save();

    // Redirect ke halaman daftar anggota
    return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan!');
}


    public function show($id)
    {
        // Menampilkan detail anggota berdasarkan ID
        $anggota = Anggota::findOrFail($id);
        return view('anggota.show', compact('anggota')); 
    }

    public function edit($id)
    {
        // Menampilkan form untuk mengedit anggota berdasarkan ID
        $anggota = Anggota::findOrFail($id);
        return view('anggota.EditAnggota', compact('anggota'))->render();
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => [
                'required',
                'string',
                'max:20',
                Rule::unique('anggotas', 'npm')->ignore($id),
            ],
            'jabatan' => 'required|string|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->nama = $validated['nama'];
        $anggota->npm = $validated['npm'];
        $anggota->jabatan = $validated['jabatan'];

        if ($request->hasFile('foto')) {
            // Simpan file di dalam folder uploads di public/storage
            $path = $request->file('foto')->store('uploads', 'public');
            $anggota->foto = $path;
        }

        $anggota->save();

        // Redirect ke halaman daftar anggota
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil diperbarui!');
    }


    public function destroy($id)
    {
        // Menghapus anggota berdasarkan ID
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        // Redirect ke halaman daftar anggota
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus!');
    }
}
