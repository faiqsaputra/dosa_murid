<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Jurusan::Create([
            "kode_jurusan" => "RPL",
            "nama_jurusan" => "Rekayasa Perangkat Lunak"
        ]);

        Jurusan::Create([
            "kode_jurusan" => "MPLB",
            "nama_jurusan" => "Manegement Perkantoran dan Lembaga bisnis"
        ]);

        Jurusan::Create([
            "kode_jurusan" => "AKL",
            "nama_jurusan" => "Akutansi Keuangan Lembaga"
        ]);

        Jurusan::Create([
            "kode_jurusan" => "TO",
            "nama_jurusan" => "Tekhnik Otomotif"
        ]);

        Jurusan::Create([
            "kode_jurusan" => "PM",
            "nama_jurusan" => "Pemasaran"
        ]);
    }
}
