<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('divisis', function (Blueprint $table) {
            $table->id();
            $table->string('nama_divisi'); // Kolom untuk nama divisi
            $table->integer('jumlah_anggota'); // Kolom untuk jumlah anggota divisi
            $table->enum('status', ['aktif', 'non-aktif'])->default('non-aktif'); // Kolom status dengan nilai default non-aktif
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('divisis');
    }
};
