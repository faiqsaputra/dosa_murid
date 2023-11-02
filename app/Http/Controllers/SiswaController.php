<?php

namespace App\Http\Controllers;

use App\Models\GuruBK;
use App\Models\Pelanggaran;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return view('siswa');
    }
    public function result(Request $request)
    {
        $nis = $request->nis;
        $siswa = Siswa::where('nis', $nis)->with('kelas.jurusan')->first();
        $guruBK = GuruBK::all();
        return view('result', compact('nis', 'siswa', 'guruBK'));
    }

    public function siswaProfile(Request $request)
    {
        $nis = $request->nis;
        $pelanggaran = Pelanggaran::all();
        $siswa = Siswa::where('nis', $nis)->with('kelas.jurusan')->first();
        $guruBK = GuruBK::all();
        return view('siswaProfile', compact('nis', 'siswa', 'guruBK'));
    }

    public function profill(Request $request)
    {
        $nis = $request->nis;
        $pelanggaran = Pelanggaran::all();
        $siswa = Siswa::where('nis', $nis)->with('kelas.jurusan')->first();
        $guruBK = GuruBK::all();
        return view('profill', compact('nis', 'siswa', 'guruBK'));
    }
}
