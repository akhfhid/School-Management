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
        Schema::create('kehadiran_siswa', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa');
            $table->date('tanggal');
            $table->enum('status_kehadiran', ['Hadir', 'Sakit', 'Izin', 'Alpha']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kehadiran_siswa');
    }
};
