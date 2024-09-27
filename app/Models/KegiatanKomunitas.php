<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanKomunitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_kegiatan',
        'deskripsi',
        'tanggal_kegiatan',
        'foto',
        'komunitas_id'
    ];

    // public function komunitas()
    // {
    //     return $this->belongsTo(KegiatanKomunitas::class);
    // }

    public function komunitas()
    {
        return $this->belongsTo(Komunitas::class, 'komunitas_id');
    }    
}
