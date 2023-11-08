<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = "mahasiswa";

    //menghubungkan table mahasiswas dengan tabel prodis
    //nama method singular tanpa tambahan 's'karena one to one relationship

    public function prodi()
    {
        return $this->belongsTo('App\Models\Prodi');
    }
}


