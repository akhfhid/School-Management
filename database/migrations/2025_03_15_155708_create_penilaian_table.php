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
        Schema::create('penilaian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa');
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajaran');
            $table->decimal('nilai_tugas', 5, 2);
            $table->decimal('nilai_ujian', 5, 2);
            $table->decimal('nilai_akhir', 5, 2);
            $table->text('deskripsi_penilaian')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('penilaian');
    }
};
