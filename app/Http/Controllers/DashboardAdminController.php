<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Kegiatan;
use App\Models\Periode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    public function index(Request $request)
    {
        // Menentukan bulan dan tahun dari query string, default ke bulan dan tahun saat ini
        $currentMonth = $request->input('month', Carbon::now()->month);
        $currentYear = $request->input('year', Carbon::now()->year);

        // Jumlah anggota
        $jumlahAnggota = Anggota::count();

        // Jumlah kegiatan
        $jumlahKegiatan = Kegiatan::count();

        // Tahun Periode 
        $tahunPeriode = Periode::where('status', 'active')->latest()->value('tahun');

        // 5 Kegiatan terbaru
        $kegiatanList = Kegiatan::orderBy('tanggal', 'desc')->take(5)->get();

        // Kegiatan mendatang
        $kegiatanMendatang = Kegiatan::where('tanggal', '>', now())->orderBy('tanggal')->take(5)->get();

        // Data untuk grafik
        $chartData = [
            'kegiatan' => Kegiatan::selectRaw('MONTH(tanggal) as month, COUNT(*) as count')
                                  ->groupBy('month')
                                  ->pluck('count', 'month')
                                  ->toArray(),
        ];

        // Kegiatan untuk kalender 
        $kegiatanKalender = Kegiatan::whereMonth('tanggal', $currentMonth)
                                    ->whereYear('tanggal', $currentYear)
                                    ->get();

        // Berita kegiatan terbaru
        $beritaKegiatan = Kegiatan::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.Dashboard', compact('jumlahAnggota', 'jumlahKegiatan', 'tahunPeriode', 'kegiatanList', 'kegiatanMendatang', 'chartData', 'kegiatanKalender', 'beritaKegiatan', 'currentMonth', 'currentYear'));
    }
}
