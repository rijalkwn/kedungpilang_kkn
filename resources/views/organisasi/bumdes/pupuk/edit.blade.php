@extends('layouts.app')

@section('title', 'Edit Data Pupuk BUMDES')

@section('content')

    <div class="container">
        <a href="/admin/pupuk" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pupuk.update', $pupuk->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="merek_pupuk">Merek Pupuk</label>
                        <input type="text" class="form-control" name="merek_pupuk" placeholder="Merek Pupuk"
                            value="{{ $pupuk->merek_pupuk }}">
                    </div>
                    @error('merek_pupuk')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" name="harga" placeholder="Harga"
                            value="{{ $pupuk->harga }}">
                    </div>
                    @error('harga')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="stok">Stok</label><i>*satuan sak*</i>
                        <input type="number" class="form-control" name="stok" placeholder="Stok"
                            value="{{ $pupuk->stok }}">
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
