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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswa');
            $table->string('jenis_pembayaran');
            $table->date('tanggal_pembayaran');
            $table->decimal('jumlah_pembayaran', 10, 2);
            $table->enum('status', ['Lunas', 'Tertunda']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
};
