<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::create([
            "kode_kelas" => "RPL231",
            "nama_kelas" => "X RPL 1",
            "kode_jurusan" => "RPL",
        ]);

        Kelas::create([
            "kode_kelas" => "MPLB232",
            "nama_kelas" => "X MPLB 1",
            "kode_jurusan" => "MPLB",
        ]);

        Kelas::create([
            "kode_kelas" => "AKL221",
            "nama_kelas" => "X AKL 1",
            "kode_jurusan" => "AKL",
        ]);
    }
}
