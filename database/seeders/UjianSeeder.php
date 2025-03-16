<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UjianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ujian')->insert([
            [
                'mata_pelajaran_id' => 1, // ID mata pelajaran Matematika Dasar
                'guru_id' => 1, // ID guru Budi Santoso
                'tanggal_ujian' => '2023-10-26',
                'waktu_ujian' => '09:00:00',
                'durasi' => 90,
                'jenis_ujian' => 'UTS',
            ],
            [
                'mata_pelajaran_id' => 2, // ID mata pelajaran Bahasa Indonesia Lanjutan
                'guru_id' => 2, // ID guru Siti Aminah
                'tanggal_ujian' => '2023-10-27',
                'waktu_ujian' => '10:00:00',
                'durasi' => 120,
                'jenis_ujian' => 'UAS',
            ],
        ]);
    }
}
