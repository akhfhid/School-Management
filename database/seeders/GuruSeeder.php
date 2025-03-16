<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('guru')->insert([
            [
                'nama_guru' => 'Budi Santoso',
                'nip' => '1234567890',
                'jabatan' => 'Guru Matematika',
                'mata_pelajaran_id' => 1,
                'alamat' => 'Jl. Merdeka No. 10',
                'telepon' => '081234567890',
                'email' => 'budi.santoso@example.com',
                'status' => 'Aktif',
            ],
            [
                'nama_guru' => 'Siti Aminah',
                'nip' => '0987654321',
                'jabatan' => 'Guru Bahasa Indonesia',
                'mata_pelajaran_id' => 2,
                'alamat' => 'Jl. Pahlawan No. 20',
                'telepon' => '082345678901',
                'email' => 'siti.aminah@example.com',
                'status' => 'Aktif',
            ],
        ]);
    }
}
