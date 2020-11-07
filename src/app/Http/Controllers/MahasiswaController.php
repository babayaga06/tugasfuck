<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
         return view('mahasiswa',[
            "mahasiswa" =>\App\Models\Mahasiswa::paginate(10) //ambil semua data,dan menampilkan data ke table setelah diinput
        ]);
    }
    //
    public function simpan(Request $request){           //menyimpan data ke database
        $request->validate([
            "nim" => "required|max:11",
            "nama" => "required|max:50",
            "alamat" => "required|max:100",
            "telepon" => "required|max:15"
        ]);
        //dd($request->all());
        \App\Models\Mahasiswa::create([
            "nim" => $request -> nim,
            "nama" => $request -> nama,
            "alamat" => $request -> alamat,
            "telepon" => $request -> telepon
        ]);
        return redirect()->route('mahasiswa.index');
    }
    public function hapus($id){
       Mahasiswa::destroy($id);
       return redirect()->route('mahasiswa.index');
    }
    public function tampil($id){
        $mahasiswa = Mahasiswa::find($id);
        //
        return view('mahasiswa',[
            "mahasiswa" => Mahasiswa::paginate(10),
            "data" => $mahasiswa]);
    }
    public function update(Request $request,$id){
        $mahasiswa = Mahasiswa::find($id);
        $mahasiswa->nim = $request->nim;
        $mahasiswa->nama = $request->nama;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->telepon = $request->telepon;
        $mahasiswa->save();
        //Kuhusus Rubah Data 
        return redirect()->route('mahasiswa.index');
    }
}
