<?php

namespace Database\Seeders;

use App\Models\GuruBK;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuruBKSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GuruBK::create([
            'kode_bk' => 'BK00',
            'nama' => 'Syukurillah',
            'nip' => '112367711',
            'alamat' => 'Jl. Raya Bangsri',
            'no_telpon' => '098877716635',
        ]);

        GuruBK::create([
            'kode_bk' => 'BK02',
            'nama' => 'Titik',
            'nip' => '112288711',
            'alamat' => 'Jl. Raya Krasak',
            'no_telpon' => '098866666635',
        ]);
    }
}
