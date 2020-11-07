<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Regmahasiswa;

class RegmahasiswaController extends Controller
{
    //
    public function index(){
        return view('regmahasiswa',[
            "regmahasiswa" =>\App\Models\Regmahasiswa::paginate(10) //ambil semua data,dan menampilkan data ke table setelah diinput
        ]);
    }
    public function simpan(Request $request){           //menyimpan data register ke database
        $request->validate([
            "nim" => "required|max:12",
            "nama" => "required|max:50",
            "jeniskelamin" => "required|max:10",
            "agama" => "required|max:15",
                "kewarganegaraan" => "required|max:5",
                "jurusan" => "required|max:30",
                "jenjang" => "required|max:15",
                "tahunakademik" => "required|max:6",
                "ttl" => "required|max:50",
                "alamat" => "required|max:50",
                "kota" => "required|max:20",
                "kodepos" => "required|max:12",
                    "telepon" => "required|max:14",
                    "namasekolah" => "required|max:20",
                    "tahunmasuk" => "required|max:5",
                    "namaorangtua" => "required|max:50",
                    "alamatorangtua" => "required|max:50",
                    "kota1" => "required|max:20",
                    "kodepos1" => "required|max:12",
                    "telepon1" => "required|max:14",
                    "waktukuliah" => "required|max:12",
                    "pilihmatkul" => "required|max:20"
        ]);
        //dd($request->all());
        \App\Models\Regmahasiswa::create([
            "nim" => $request -> nim,
            "nama" => $request -> nama,
            "jeniskelamin" => $request -> jeniskelamin,
            "agama" => $request -> agama,
            "kewarganegaraan" => $request -> kewarganegaraan,
            "jurusan" => $request -> jurusan,
            "jenjang" => $request -> jenjang,
            "tahunakademik" => $request -> tahunakademik,
            "ttl" => $request -> ttl,
            "alamat" => $request -> alamat,
            "kota" => $request -> kota,
            "kodepos" => $request -> kodepos,
            "telepon" => $request -> telepon,
            "namasekolah" => $request -> namasekolah,
            "tahunmasuk" => $request -> tahunmasuk,
            "namaorangtua" => $request -> namaorangtua,
            "alamatorangtua" => $request -> alamatorangtua,
            "kota1" => $request -> kota1,
            "kodepos1" => $request -> kodepos1,
            "telepon1" => $request -> telepon1,
            "waktukuliah" => $request -> waktukuliah,
            "pilihmatkul" => $request -> pilihmatkul

        ]);
        return redirect()->route('regmahasiswa.index');
    }
    public function hapus($id){
        Regmahasiswa::destroy($id);
        return redirect()->route('regmahasiswa.index');
     }
     public function tampil($id){
         $regmahasiswa = Regmahasiswa::find($id);
         //
         return view('regmahasiswa',[
             "regmahasiswa" => Regmahasiswa::Paginate(10),
             "data" => $regmahasiswa]);
     }
     public function update(Request $request,$id){
         $regmahasiswa = Regmahasiswa::find($id);
         $regmahasiswa->nim = $request->nim;
         $regmahasiswa->nama = $request->nama;
         $regmahasiswa->jeniskelamin = $request->jeniskelamin;
         $regmahasiswa->agama = $request->agama;
         $regmahasiswa->kewarganegaraan = $request->kewarganegaraan;
         $regmahasiswa->jurusan = $request->jurusan;
         $regmahasiswa->jenjang = $request->jenjang;
         $regmahasiswa->tahunakademik = $request->tahunakademik;
         $regmahasiswa->ttl = $request->ttl;
         $regmahasiswa->alamat = $request->alamat;
         $regmahasiswa->kota = $request->kota;
         $regmahasiswa->kodepos = $request->kodepos;
         $regmahasiswa->telepon = $request->telepon;
         $regmahasiswa->namasekolah = $request->namasekolah;
         $regmahasiswa->tahunmasuk = $request->tahunmasuk;
         $regmahasiswa->namaorangtua = $request->namaorangtua;
         $regmahasiswa->alamatorangtua = $request->alamatorangtua;
         $regmahasiswa->kota1 = $request->kota1;
         $regmahasiswa->kodepos1 = $request->kodepos1;
         $regmahasiswa->telepon1 = $request->telepon1;
         $regmahasiswa->waktukuliah = $request->waktukuliah;
         $regmahasiswa->pilihmatkul = $request->pilihmatkul;
         $regmahasiswa->save();
         //Kuhusus Rubah Data 
         return redirect()->route('regmahasiswa.index');
     }
}

