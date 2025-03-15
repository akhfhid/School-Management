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
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelas');
            $table->enum('tingkat', ['SD', 'SMP', 'SMA']);
            $table->foreignId('wali_kelas_id')->constrained('guru');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kelas');
    }
};
