@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 align="center">FORM PENDAFTARAN MAHASISWA STIE-STMIK IBBI</h2>
        <h6 align="center">Bekal Terbaik Menuju Masa Depan Gemilang </h6>
        <form action="{{ isset($data)
                            ?route('regmahasiswa.update',["id" => $data->id])
                            :route('regmahasiswa.simpan') }}" method="POST">
                            @csrf
        <hr>
            <div class="form-groub">
            <label for="nim">NIM</label>
            <input type="text" class="form-control @error('nim') is-invalid  @enderror" placeholder="Masukkan Nim Anda" id="nim"
            name="nim" value={{ isset($data)?$data->nim:"" }}>
            @error('nim')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="nama">NAMA MAHASISWA</label>
            <input type="text" class="form-control @error('nama') is-invalid  @enderror" placeholder="Nama Mahasiswa" id="nama" name="nama"
            value={{ isset($data)?$data->nama:"" }}>
            @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
            <label for="jeniskelamin">JENIS KELAMIN</label>
            <input type="text" class="form-control @error('jeniskelamin') is-invalid  @enderror" placeholder="Jenis Kelamin" id="jeniskelamin" name="jeniskelamin"
            value={{ isset($data)?$data->jeniskelamin:"" }}>
            @error('jeniskelamin')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="agama">AGAMA</label>
            <input type="text" class="form-control @error('agama') is-invalid  @enderror" placeholder="Agama" id="agama" name="agama"
            value={{ isset($data)?$data->agama:"" }}>
            @error('agama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="kewarganegaraan">KEWARGANEGARAAN<b>(WNI/WNA)</b></label>
            <input type="text" class="form-control @error('kewarganegaraan') is-invalid  @enderror" placeholder="Kewarganegaraan" id="kewarganegaraan" name="kewarganegaraan"
            value={{ isset($data)?$data->kewarganegaraan:"" }}>
            @error('kewarganegaraan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="jurusan">JURUSAN</label>
            <input type="text" class="form-control @error('jurusan') is-invalid  @enderror" placeholder="Jurusan Anda" id="jurusan" name="jurusan"
            value={{ isset($data)?$data->jurusan:"" }}>
            @error('jurusan')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="jenjang">JENJANG<b>(S1 STMIK,S1 STIE,D III STIE,D1 STIE)</b></label>
            <input type="text" class="form-control @error('jenjang') is-invalid  @enderror" placeholder="Jenjang" id="jenjang" name="jenjang"
            value={{ isset($data)?$data->jenjang:"" }}>
            @error('jenjang')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="tahunakademik">TAHUN AKADEMIK</label>
            <input type="text" class="form-control @error('tahunakademik') is-invalid  @enderror" placeholder="Masukkan Tahun Akademik" id="tahunakademik" name="tahunakademik"
            value={{ isset($data)?$data->tahunakademik:"" }}>
            @error('tahunakademik')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="ttl">TEMPAT / TANGGAL LAHIR</label>
            <input type="text" class="form-control @error('ttl') is-invalid  @enderror" placeholder="Masukkan Tempat/Tanggal Lahir" id="ttl" name="ttl"
            value={{ isset($data)?$data->ttl:"" }}>
            @error('ttl')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="alamat">ALAMAT</label>
            <input type="text" class="form-control @error('alamat') is-invalid  @enderror" placeholder="Maukkan Alamat Anda" id="alamat" name="alamat"
            value={{ isset($data)?$data->alamat:"" }}>
            @error('alamat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="kota">KOTA</label>
                <input type="text" class="form-control @error('kota') is-invalid  @enderror" id="kota" name="kota"
                value={{ isset($data)?$data->kota:"" }}>
                @error('kota')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
                 <div class="col-md-4 mb-3">
                <label for="kodepos">KODE POS</label>
                <input type="text" class="form-control @error('kodepos') is-invalid  @enderror" id="kodepos" name="kodepos"
                value={{ isset($data)?$data->kodepos:"" }}>
                @error('kodepos')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="col-md-4 mb-3">
                <label for="telepon">TELEPON</label>
                <input type="text" class="form-control @error('telepon') is-invalid  @enderror" id="telepon" name="telepon"
                value={{ isset($data)?$data->telepon:"" }}>
                @error('telepon')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            </div>
            <div class="form-groub">
            <label for="namasekolah">NAMA SMU/SMK</label>
            <input type="text" class="form-control @error('namasekolah') is-invalid  @enderror" placeholder="Nama SMU/SMK" id="namasekolah" name="namasekolah"
            value={{ isset($data)?$data->namasekolah:"" }}>
            @error('namasekolah')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="tahunmasuk">TAHUN MASUK</label>
            <input type="text" class="form-control @error('tahunmasuk') is-invalid  @enderror" placeholder="Masukkan Tahun Masuk" id="tahunmasuk" name="tahunmasuk"
            value={{ isset($data)?$data->tahunmasuk:"" }}>
            @error('tahunmasuk')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="namaorangtua">NAMA ORANG TUA</label>
            <input type="text" class="form-control @error('namaorangtua') is-invalid  @enderror" placeholder="Masukkan Nama Orang Tua" id="namaorangtua" name="namaorangtua"
            value={{ isset($data)?$data->namaorangtua:"" }}>
            @error('namaorangtua')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="alamatorangtua">ALAMAT ORANG TUA</label>
            <input type="text" class="form-control @error('alamatorangtua') is-invalid  @enderror" placeholder="Masukkan Alamat Orang Tua" id="alamatorangtua" name="alamatorangtua"
            value={{ isset($data)?$data->alamatorangtua:"" }}>
            @error('alamatorangtua')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="kota1">KOTA</label>
                <input type="text" class="form-control @error('kota1') is-invalid  @enderror" id="kota1" name="kota1"
                value={{ isset($data)?$data->kota1:"" }}>
                @error('kota1')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
                 <div class="col-md-4 mb-3">
                <label for="kodepos1">KODE POS</label>
                <input type="text" class="form-control @error('kodepos1') is-invalid  @enderror" id="kodepos1" name="kodepos1"
                value={{ isset($data)?$data->kodepos1:"" }}>
                @error('kodepos1')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
                </div>
                <div class="col-md-4 mb-3">
                <label for="telepon1">TELEPON</label>
                <input type="text" class="form-control @error('telepon1') is-invalid  @enderror" id="telepon1" name="telepon1"
                value={{ isset($data)?$data->telepon1:"" }}>
                @error('telepon1')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            </div>
            <div class="form-groub">
            <label for="waktukuliah">WAKTU KULIAH</label>
            <input type="text" class="form-control @error('waktukuliah') is-invalid  @enderror" placeholder="Waktu Kuliah" id="waktukuliah" name="waktukuliah"
            value={{ isset($data)?$data->waktukuliah:"" }}>
            @error('waktukuliah')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-groub">
            <label for="pilihmatkul">PENGAMBILAN MATA KULIAH AGAMA YANG DIINGINKAN<b>(ISLAM,BUDDHA,KRISTEN/KATOLIK,HINDU)</b></label>
            <input type="text" class="form-control @error('pilihmatkul') is-invalid  @enderror" placeholder="Mata Kuliah Agama" id="pilihmatkul" name="pilihmatkul"
            value={{ isset($data)?$data->pilihmatkul:"" }}>
            @error('pilihmatkul')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <hr>
            <input type="submit" value="Create" class="btn btn-primary btn-block">
        </form>
        <hr>
    </div>
    <div class="container-fluid-xl">
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr align="center">
                    <th>Nim</th>
                    <th>Nama Mahasiswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Kewarganegaraan</th>
                    <th>Jurusan</th>
                    <th>Jenjang</th>
                    <th>Tahun Akademik</th>
                    <th>Tempat/Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Kota</th>
                    <th>Kode Pos</th>
                    <th>telepon</th>
                    <th>Nama SMU/SMK</th>
                    <th>Tahun Masuk</th>
                    <th>Nama Orang Tua</th>
                    <th>Kota</th>
                    <th>Kode Pos</th>
                    <th>Telepon</th>
                    <th>Waktu Kuliah</th>
                    <th>Mata kuliah Agama</th>
                    <th colspan=2>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regmahasiswa as $item) 
                <tr align="center">
                    <th>{{$item->nim}}</th>
                    <th>{{$item->nama}}</th>
                    <th>{{$item->jeniskelamin}}</th>
                    <th>{{$item->agama}}</th>
                    <th>{{$item->kewarganegaraan}}</th>
                    <th>{{$item->jurusan}}</th>
                    <th>{{$item->jenjang}}</th>
                    <th>{{$item->tahunakademik}}</th>
                    <th>{{$item->ttl}}</th>
                    <th>{{$item->alamat}}</th>
                    <th>{{$item->kota}}</th>
                    <th>{{$item->kodepos}}</th>
                    <th>{{$item->telepon}}</th>
                    <th>{{$item->namasekolah}}</th>
                    <th>{{$item->tahunmasuk}}</th>
                    <th>{{$item->namaorangtua}}</th>
                    <th>{{$item->kota1}}</th>
                    <th>{{$item->kodepos1}}</th>
                    <th>{{$item->telepon1}}</th>
                    <th>{{$item->waktukuliah}}</th>
                    <th>{{$item->pilihmatkul}}</th>
                    <th><a href="{{route('regmahasiswa.tampil',["id" => $item->id])}}" 
                            class="btn btn-warning btn-block" >Update</a></th>
                    <td><a href="{{ route('regmahasiswa.hapus',["id" => $item->id]) }}"
                            class="btn btn-danger btn-block">Delete</a></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {{$regmahasiswa->links()}}
    </div>
@endsection()