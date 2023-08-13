@extends('layouts.app')

@section('title', 'Edit Data UMKM Desa Kedungpilang')

@section('content')

    <div class="container">
        <a href="/admin/datadesa" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('datadesa.update', $datadesa->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul" placeholder="Judul"
                            value="{{ $datadesa->judul }}">
                    </div>
                    @error('judul')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">penjelasan</label>
                        <textarea name="penjelasan" id="" cols="30" rows="10" class="form-control" placeholder="penjelasan">{{ $datadesa->penjelasan }}</textarea>
                    </div>
                    @error('penjelasan')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">File</label>
                        <small style="color: red">*Wajib file pdf*</small>
                        <input type="file" class="form-control" name="file">
                    </div>
                    @error('file')
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
