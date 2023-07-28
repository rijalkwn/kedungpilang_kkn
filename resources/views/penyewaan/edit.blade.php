@extends('layouts.app')

@section('title', 'Edit Data Penyewaan')

@section('content')

    <div class="container">
        <a href="/admin/penyewaan" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('penyewaan.update', $penyewaan->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="alat">Alat</label>
                        <input type="text" class="form-control" name="merek_pupuk" placeholder="Alat"
                            value="{{ $penyewaan->alat }}">
                    </div>
                    @error('alat')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="harga">Harga</label><i>*Per Hari*</i>
                        <input type="number" class="form-control" name="harga" placeholder="Harga"
                            value="{{ $penyewaan->harga }}">
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
