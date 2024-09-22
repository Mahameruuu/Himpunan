<?php

namespace App\Http\Controllers;

use App\Models\Komunitas;
use Illuminate\Http\Request;

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

    public function edit(Komunitas $komunitas)
    {
        return view('komunitas.edit', compact('komunitas'));
    }

    public function update(Request $request, Komunitas $komunitas)
    {
        $validated = $request->validate([
            'nama_komunitas' => 'required|string|max:255',
            'deskripsi' => 'required',
            'tanggal_didirikan' => 'required|date',
            'foto' => 'image|nullable|max:1999',
        ]);

        if ($request->hasFile('foto')) {
            $filename = $request->file('foto')->store('komunitas_foto', 'public');
            $validated['foto'] = $filename;
        }

        $komunitas->update($validated);
        return redirect()->route('komunitas.index')->with('success', 'Komunitas updated successfully');
    }

    public function destroy(Komunitas $komunitas)
    {
        $komunitas->delete();
        return redirect()->route('komunitas.index')->with('success', 'Komunitas deleted successfully');
    }
}
