@extends('layouts.app')

@section('title', 'Edit Data Karang Taruna')

@section('content')

    <div class="container">
        <a href="/admin/karangtaruna" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('karangtaruna.update', $karangtaruna->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama"
                            value="{{ $karangtaruna->nama }}">
                    </div>
                    @error('nama')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"
                            value="{{ $karangtaruna->jabatan }}">
                    </div>
                    @error('jabatan')
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
