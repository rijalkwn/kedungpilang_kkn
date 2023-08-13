@extends('layouts.app')

@section('title', 'Tambah Data Penyewaan BUMDES')

@section('content')

    <div class="container">
        <a href="/admin/penyewaan" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('penyewaan.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="alat">Merek Pupuk</label>
                        <input type="text" class="form-control" name="alat" placeholder="Alat">
                    </div>
                    @error('alat')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Harga</label> <i>*Per Hari*</i>
                        <input type="number" class="form-control" name="harga" placeholder="Harga">
                    </div>
                    @error('harga')
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
