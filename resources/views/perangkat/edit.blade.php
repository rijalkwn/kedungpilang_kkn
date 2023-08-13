@extends('layouts.app')

@section('title', 'Tambah Data Perangkat Desa Kedungpilang')

@section('content')

    <div class="container">
        <a href="/admin/perangkat" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('perangkat.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama"
                            value="{{ $perangkat->nama }}">
                    </div>
                    @error('nama')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input name="jabatan" id="" cols="30" rows="10" class="form-control"
                            placeholder="Jabatan" value="{{ $perangkat->jabatan }}">
                    </div>
                    @error('jabatan')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <small style="color: red">*Ukuran foto sangat disarankan rasio 3 X 4*</small>
                        <input type="file" class="form-control" name="image" value="{{ $perangkat->image }}">
                    </div>
                    @error('image')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
