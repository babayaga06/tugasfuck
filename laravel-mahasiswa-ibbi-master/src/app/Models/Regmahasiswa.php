<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regmahasiswa extends Model
{
    use HasFactory;
    protected $table ="tblregmahasiswa";
    
    protected $fillable = ['nim','nama','jeniskelamin','agama','kewarganegaraan','jurusan','jenjang',
    'tahunakademik','ttl','alamat','kota','kodepos','telepon','namasekolah','tahunmasuk','namaorangtua','alamatorangtua','kota1','kodepos1','telepon1','waktukuliah','pilihmatkul'];
}
