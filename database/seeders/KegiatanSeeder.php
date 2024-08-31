<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kegiatan;

class KegiatanSeeder extends Seeder
{
    public function run()
    {
        Kegiatan::create([
            'nama_kegiatan' => 'Kegiatan 1',
            'tanggal' => '2024-09-01',
            'deskripsi' => 'Deskripsi Kegiatan 1',
            'foto' => null,
        ]);

        Kegiatan::create([
            'nama_kegiatan' => 'Kegiatan 2',
            'tanggal' => '2024-09-05',
            'deskripsi' => 'Deskripsi Kegiatan 2',
            'foto' => null,
        ]);

        // Tambah kegiatan lainnya jika perlu
    }
}
