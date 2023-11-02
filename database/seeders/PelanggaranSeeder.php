<?php

namespace Database\Seeders;

use App\Models\Pelanggaran;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLGOMB',
            'nama_pelanggaran' => 'terlambat',
            'poin' => '170',
        ]);

        Pelanggaran::create([
            'kode_pelanggaran' => 'PLGMNNH',
            'nama_pelanggaran' => 'tidak Membawa Topi',
            'poin' => '500',
        ]);

        Pelanggaran::create([
            'kode_pelanggaran' => 'PAKAKL',
            'nama_pelanggaran' => 'Bolos',
            'poin' => '900',
        ]);

        Pelanggaran::create([
            'kode_pelanggaran' => 'PLkkaMB',
            'nama_pelanggaran' => 'Pakaian Tidak lengkap',
            'poin' => '53',
        ]);
        Pelanggaran::create([
            'kode_pelanggaran' => 'PLKMRRK',
            'nama_pelanggaran' => 'lainya',
            'poin' => '100',
        ]);
    }
}
