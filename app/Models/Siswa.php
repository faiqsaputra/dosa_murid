<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $filelable = [
        'nama',
        'nisn',
        'nis',
        'Tempat_lahir',
        'tanggal_lahir',
        'jenis_Kelamin',
        'alamat',
        'no_tlepon',
        'kode_kelas',
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kode_kelas', 'kode_kelas')->with('jurusan');
    }
    public function aksi()
    {
        return $this->hasMany(Aksi::class, 'nis_siswa', 'nis')->with('guruBK', 'listPelanggaran');
    }
}
