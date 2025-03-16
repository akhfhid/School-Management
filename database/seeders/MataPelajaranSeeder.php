<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MataPelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mata_pelajaran')->insert([
            [
                'nama_mata_pelajaran' => 'Matematika Dasar',
                'deskripsi' => 'Mempelajari konsep dasar matematika.',
            ],
            [
                'nama_mata_pelajaran' => 'Bahasa Indonesia Lanjutan',
                'deskripsi' => 'Mempelajari tata bahasa dan sastra Indonesia.',
            ],
        ]);
    }
}
