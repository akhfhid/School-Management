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
        Schema::create('jadwal_pelajaran', function (Blueprint $table) {
            $table->id();
            $table->enum('hari', ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']);
            $table->time('jam_mulai');
            $table->time('jam_selesai');
            $table->foreignId('kelas_id')->constrained('kelas');
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajaran');
            $table->foreignId('guru_id')->constrained('guru');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('jadwal_pelajaran');
    }
};
