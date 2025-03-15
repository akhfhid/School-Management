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
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->id();
            $table->string('judul_pengumuman');
            $table->text('isi_pengumuman');
            $table->date('tanggal_pengumuman');
            $table->string('terkait');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengumuman');
    }
};
