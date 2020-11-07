@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Form Mata Kuliah</h2>
        <hr>
        <form action="{{ isset($data)
                            ?route('matakuliah.update',["id" => $data->id])
                            :route('matakuliah.simpan') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="kodemk">Kode Mata Kuliah</label>
                <input type="text" name="kodemk" id="kodemk" class="form-control @error('kodemk') is-invalid  @enderror"
                value={{ isset($data)?$data->kodemk:"" }}>
                @error('kodemk')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="namamk">Nama Mata Kuliah</label>
                <input type="text" name="namamk" id="namamk" class="form-control @error('namamk') is-invalid  @enderror"
                value={{ isset($data)?$data->namamk:"" }}>
                @error('namamk')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="dosen">Dosen</label>
                <input type="text" name="dosen" id="dosen" class="form-control @error('dosen') is-invalid  @enderror"
                value={{ isset($data)?$data->dosen:"" }}>
                @error('dosen')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ruang">Ruang</label>
                <input type="text" name="ruang" id="ruang" class="form-control @error('ruang') is-invalid  @enderror"
                value={{ isset($data)?$data->ruang:"" }}>
                @error('ruang')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <input type="submit" value="Simpan" class="btn btn-success btn-block">
        </form>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Kode MK</th>
                    <th>Nama MK</th>
                    <th>Dosen</th>
                    <th>Ruang</th>
                    <th colspan=2>Action</th>
                </tr>
                <tbody>
                @foreach ($matakuliah as $item) 
                <tr>
                    <th>{{$item->kodemk}}</th>
                    <th>{{$item->namamk}}</th>
                    <th>{{$item->dosen}}</th>
                    <th>{{$item->ruang}}</th>
                    <th><a href="{{route('matakuliah.tampil',["id" => $item->id])}}" 
                            class="btn btn-warning btn-block" >Rubah</a></th>
                    <td><a href="{{ route('matakuliah.hapus',["id" => $item->id]) }}"
                            class="btn btn-danger btn-block">Hapus</a></td>
                </tr>
                @endforeach
                </tbody>
            </thead>
        </table>
        {{$matakuliah->links()}}
    </div>
@endsection()