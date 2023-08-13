@extends('layouts.app')

@section('title', 'Edit Data RW/RT')

@section('content')

    <div class="container">
        <a href="/admin/rwrt" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('rwrt.update', $rwrt->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama"
                            value="{{ $rwrt->nama }}">
                    </div>
                    @error('nama')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control" name="jabatan" placeholder="Jabatan"
                            value="{{ $rwrt->jabatan }}">
                    </div>
                    @error('jabatan')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">No SK</label>
                        <input type="text" name="nosk" id="" cols="30" rows="10"
                            class="form-control" placeholder="No SK" value="{{ $rwrt->nosk }}">
                    </div>
                    @error('nosk')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">TMT</label>
                        <input type="date" name="tmt" id="" cols="30" rows="10"
                            class="form-control" placeholder="TMT" value="{{ $rwrt->tmt }}">
                    </div>
                    @error('tmt')
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
