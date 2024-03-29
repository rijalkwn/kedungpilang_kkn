@extends('layouts.app')

@section('title', 'Tambah Data Pupuk')

@section('content')

    <div class="container">
        <a href="/admin/pupuk" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pupuk.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="merek_pupuk">Merek Pupuk</label>
                        <input type="text" class="form-control" name="merek_pupuk" placeholder="Merek Pupuk">
                    </div>
                    @error('merek_pupuk')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" name="harga" id="" cols="30" rows="10"
                            class="form-control" placeholder="Harga">
                    </div>
                    @error('harga')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="stok">Stok</label><small>*satuan sak*</small>
                        <input type="number" name="stok" id="" cols="30" rows="10"
                            class="form-control" placeholder="Stok">
                    </div>
                    @error('stok')
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
