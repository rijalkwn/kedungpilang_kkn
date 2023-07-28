@extends('layouts.app')

@section('title', 'Tambah Data Mitra BUMDES')

@section('content')

    <div class="container">
        <a href="/admin/mitrabumdes" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('mitrabumdes.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Nama Usaha</label>
                        <input type="text" class="form-control" name="nama_usaha" placeholder="Nama Usaha">
                    </div>
                    @error('nama_usaha')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    @error('deskripsi')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">ROI</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="roi" placeholder="ROI">
                    </div>
                    @error('roi')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">ROA</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="roa" placeholder="ROA">
                    </div>
                    @error('roa')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">ROE</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="roe" placeholder="ROE">
                    </div>
                    @error('roe')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">GPM</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="gpm" placeholder="GPM">
                    </div>
                    @error('gpm')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">OPM</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="opm" placeholder="OPM">
                    </div>
                    @error('opm')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">NPM</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="npm" placeholder="NPM">
                    </div>
                    @error('npm')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Valuasi</label>
                        <input type="text" class="form-control" name="valuasi" placeholder="valuasi">
                    </div>
                    @error('valuasi')
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
