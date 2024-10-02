<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periode;

class PeriodeController extends Controller
{
    public function index()
    {
        $periodes = Periode::all();
        return view('periode.Periode', compact('periodes'));
    }

    public function create()
    {
        return view('periode.TambahPeriode');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required|string|max:4',
            'status' => 'required|in:active,non-active',
        ]);

        Periode::create([
            'tahun' => $request->tahun,
            'status' => $request->status,
        ]);

        return redirect()->route('periode.index')->with('success', 'Periode berhasil ditambahkan');
    }

    public function edit($id)
    {
        $periode = Periode::findOrFail($id);
        return view('periode.edit', compact('periode'));
    }

    public function changeStatus($id)
    {
        $periode = Periode::find($id);

        if (!$periode) {
            return response()->json(['success' => false, 'message' => 'Periode not found'], 404);
        }

        $periode->status = ($periode->status == 'active') ? 'non-active' : 'active';
        $periode->save();

        return response()->json(['success' => true, 'status' => $periode->status]);
    }
    
    public function destroy($id)
    {
        $periode = Periode::findOrFail($id);
        $periode->delete();

        return redirect()->route('periode.index')->with('success', 'Periode berhasil dihapus');
    }
}

