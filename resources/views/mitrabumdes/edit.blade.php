@extends('layouts.app')

@section('title', 'Edit Data Mitra BUMDES')

@section('content')

    <div class="container">
        <a href="/admin/mitrabumdes" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('mitrabumdes.update', $mitrabumdes->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nama_usaha">Nama Usaha</label>
                        <input type="text" class="form-control" name="nama_usaha" placeholder="Nama Usaha"
                            value="{{ $mitrabumdes->nama_usaha }}">
                    </div>
                    @error('nama_usaha')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control">{{ $mitrabumdes->deskripsi }}</textarea>
                    </div>
                    @error('deskripsi')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="roi">ROI</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="roi" placeholder="ROI"
                            value="{{ $mitrabumdes->roi }}">
                    </div>
                    @error('roi')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="roa">ROA</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="roa" placeholder="ROA"
                            value="{{ $mitrabumdes->roa }}">
                    </div>
                    @error('roa')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="roe">ROE</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="roe" placeholder="ROE"
                            value="{{ $mitrabumdes->roe }}">
                    </div>
                    @error('roe')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="gpm">GPM</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="gpm" placeholder="GPM"
                            value="{{ $mitrabumdes->gpm }}">
                    </div>
                    @error('gpm')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="opm">OPM</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="opm" placeholder="OPM"
                            value="{{ $mitrabumdes->opm }}">
                    </div>
                    @error('opm')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="npm">NPM</label><small> (dalam %)</small>
                        <input type="text" class="form-control" name="npm" placeholder="npm"
                            value="{{ $mitrabumdes->npm }}">
                    </div>
                    @error('roi')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="valuasi">Valuasi</label>
                        <input type="text" class="form-control" name="valuasi" placeholder="valuasi"
                            value="{{ $mitrabumdes->valuasi }}">
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
