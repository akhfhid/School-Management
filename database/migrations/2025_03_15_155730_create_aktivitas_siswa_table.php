<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('aktivitas_siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa');
            $table->string('jenis_aktivitas');
            $table->string('nama_aktivitas');
            $table->date('tanggal');
            $table->text('deskripsi_aktivitas')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('aktivitas_siswa');
    }
};
