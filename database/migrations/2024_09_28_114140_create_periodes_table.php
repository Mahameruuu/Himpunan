<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('periodes', function (Blueprint $table) {
            $table->id();
            $table->string('tahun', 4); 
            $table->enum('status', ['active', 'non-active'])->default('non-active'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('periodes');
    }
};
