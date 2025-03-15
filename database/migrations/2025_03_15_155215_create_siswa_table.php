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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('nisn')->unique();
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('telepon');
            $table->string('email')->unique();
            $table->string('kelas');
            $table->enum('status', ['Aktif', 'Tidak Aktif'])->default('Aktif');
            $table->string('foto_siswa')->nullable();
            $table->string('orang_tua_nama')->nullable();
            $table->string('orang_tua_kontak')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('siswa');
    }
    };

    /**
     * Reverse the migrations.
     */


