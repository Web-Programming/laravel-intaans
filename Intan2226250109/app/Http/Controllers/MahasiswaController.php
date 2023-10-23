<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illmuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function insertElq(){
        $mahasiswa = new Mahasiswa; // instansi class mahasiswa
        $mahasiswa->npm = '2226250109'; // isi property
        $mahasiswa->nama = 'Intan Sanu';
        $mahasiswa->tempat_lahir = 'Palembang';
        $mahasiswa->tanggal_lahir = '2005-04-26';
        $mahasiswa->alamat = 'Jl Apel';
        $mahasiswa->save(); // menyimpan data ke tabel mahasiswas
        dump($mahasiswa); // melihat isi $mahasiswa
    }
     public function updateElq(){
        $mahasiswa = Mahasiswa::where('npm','2226250109')->first(); // cari data tabel mahasiswa berdasarkan npm
        $mahasiswa->nama = 'jeo';
        $mahasiswa->save();
        dump($mahasiswa);
    }
    public function deleteElq(){
        $mahasiswa = Mahasiswa::where('npm','2226250109')->first(); // cari data tabel mahasiswa berdasarkan npm
        $mahasiswa->delete();
        dump($mahasiswa);
    }
      public function selectElq(){
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::all();
        return view('mahasiswa.index',['allmahasiswa'=> $mahasiswa, 'kampus'=>$kampus]);
    }
}
