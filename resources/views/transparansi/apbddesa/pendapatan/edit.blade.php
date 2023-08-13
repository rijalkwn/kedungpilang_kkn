@extends('layouts.app')

@section('title', 'Tambah Data Pendapatan Desa')

@section('content')

    <div class="container">
        <a href="/admin/pendapatandesa" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pendapatandesa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan" placeholder="Kegiatan"
                            value="{{ $pendapatandesa->kegiatan }}">
                    </div>
                    @error('kegiatan')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Anggaran</label>
                        <input type="number" name="anggaran" id="" cols="30" rows="10"
                            class="form-control" placeholder="Anggaran" value="{{ $pendapatandesa->anggaran }}">
                    </div>
                    @error('anggaran')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Realisasi</label>
                        <input type="number" name="realisasi" id="" cols="30" rows="10"
                            class="form-control" placeholder="Realisasi" value="{{ $pendapatandesa->realisasi }}">
                    </div>
                    @error('realisasi')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Selisih</label>
                        <input type="number" name="selisih" id="" cols="30" rows="10"
                            class="form-control" placeholder="Selisih" value="{{ $pendapatandesa->selisih }}">
                    </div>
                    @error('selisih')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Jenis</label>
                        <select class="form-control" name="jenis">
                            <option value="Pendapatan Asli Desa" @if ($pendapatandesa->jenis === 'Pendapatan Asli Desa') selected @endif>
                                Pendapatan Asli Desa</option>
                            <option value="Pendapatan Transfer" @if ($pendapatandesa->jenis === 'Pendapatan Transfer') selected @endif>Pendapatan
                                Transfer</option>
                            <option value="Pendapatan Lain Lain" @if ($pendapatandesa->jenis === 'Pendapatan Lain Lain') selected @endif>
                                Pendapatan Lain Lain</option>
                            <option value="Total" @if ($pendapatandesa->jenis === 'Total') selected @endif>
                                Total</option>
                        </select>
                    </div>
                    @error('jenis')
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
