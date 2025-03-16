<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengguna')->insert([
            [
                'username' => 'admin1',
                'password' => Hash::make('password123'),
                'nama_lengkap' => 'Administrator Satu',
                'jabatan' => 'Admin',
                'status' => 'Aktif',
            ],
            [
                'username' => 'operator1',
                'password' => Hash::make('password123'),
                'nama_lengkap' => 'Operator Pertama',
                'jabatan' => 'Operator',
                'status' => 'Aktif',
            ]
        ]);
    }
}
