@extends('layouts.app')

@section('title', 'Tambah Data BPD')

@section('content')

    <div class="container">
        <a href="/admin/bpd" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('bpd.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" placeholder="Nama">
                    </div>
                    @error('nama')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Jabatan</label>
                        <input name="jabatan" id="" cols="30" rows="10" class="form-control"
                            placeholder="Jabatan">
                    </div>
                    @error('jabatan')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">No SK</label>
                        <input type="text" name="nosk" id="" cols="30" rows="10"
                            class="form-control" placeholder="No SK">
                    </div>
                    @error('nosk')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">TMT</label>
                        <input type="date" name="tmt" id="" cols="30" rows="10"
                            class="form-control" placeholder="TMT">
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
