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
        Schema::create('ujian', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mata_pelajaran_id')->constrained('mata_pelajaran');
            $table->foreignId('guru_id')->constrained('guru');
            $table->date('tanggal_ujian');
            $table->time('waktu_ujian');
            $table->integer('durasi'); // dalam menit
            $table->enum('jenis_ujian', ['UTS', 'UAS']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ujian');
    }
};
