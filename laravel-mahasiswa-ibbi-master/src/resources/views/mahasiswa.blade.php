@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Form Mahasiswa</h2>
        <hr>
        <form action="{{ isset($data)
                            ?route('mahasiswa.update',["id" => $data->id])
                            :route('mahasiswa.simpan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" name="nim" class="form-control @error('nim') is-invalid  @enderror"
                    value={{ isset($data)?$data->nim:"" }}>
                @error('nim')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control @error('nama') is-invalid  @enderror"
                    value="{{ isset($data)?$data->nama:"" }}">
                @error('nama')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control @error('alamat') is-invalid  @enderror"
                    value="{{ isset($data)?$data->alamat:"" }}">
                @error('alamat')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="telepon">Telepon</label>
                <input type="text" name="telepon" class="form-control @error('telepon') is-invalid  @enderror"
                    value={{ isset($data)?$data->telepon:"" }}>
                @error('telepon')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <input type="submit" value="Simpan" class="btn btn-success btn-block">
        </form>

        <table class="table table-bordered">
            <thead>
                <tr align="center">
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Telepon</th>
                    <th colspan=2>Action</th>
                </tr>
                <tbody>
                @foreach ($mahasiswa as $item) 
                <tr>
                    <th>{{$item->nim}}</th>
                    <th>{{$item->nama}}</th>
                    <th>{{$item->alamat}}</th>
                    <th>{{$item->telepon}}</th>
                    <th><a href="{{route('mahasiswa.tampil',["id" => $item->id])}}" 
                            class="btn btn-warning btn-block" >Rubah</a></th>
                    <td><a href="{{ route('mahasiswa.hapus',["id" => $item->id]) }}"
                            class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
                @endforeach
                </tbody>
            </thead>
        </table>
        {{$mahasiswa->links()}}
    </div>
@endsection
