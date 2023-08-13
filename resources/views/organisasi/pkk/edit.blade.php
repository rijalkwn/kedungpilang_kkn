@extends('layouts.app')

@section('title', 'Edit Data PKK')

@section('content')

    <div class="container">
        <a href="/admin/pkk" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pkk.update', $pkk->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama"
                            value="{{ $pkk->nama }}">
                    </div>
                    @error('nama')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"
                            value="{{ $pkk->jabatan }}">
                    </div>
                    @error('jabatan')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Tingkat</label>
                        <select name="tingkat" id="" class="form-control px-2" value="{{ $pkk->tingkat }}">
                            <option value="Desa Kedungpilang">Desa Kedungpilang</option>
                            <option value="Dusun Kedungpilang">Dusun Kedungpilang</option>
                            <option value="Dusun Gambir">Dusun Gambir</option>
                            <option value="Dusun Kunciombo">Dusun Kunciombo</option>
                            <option value="Dusun Kedung Bulu">Dusun Kedung Bulu</option>
                            <option value="Dusun Kedung Padas">Dusun Kedung Padas</option>
                        </select>
                    </div>
                    @error('tingkat')
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
