@extends('layouts.app')

@section('title', 'Tambah Data Pembiayaan Desa')

@section('content')

    <div class="container">
        <a href="/admin/pembiayaandesa" class="btn btn-primary mb-3">Kembali</a>
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('pembiayaandesa.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Kegiatan</label>
                        <input type="text" class="form-control" name="kegiatan" placeholder="Kegiatan"
                            value="{{ $pembiayaandesa->kegiatan }}">
                    </div>
                    @error('kegiatan')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Anggaran</label>
                        <input type="number" name="anggaran" id="" cols="30" rows="10"
                            class="form-control" placeholder="Anggaran" value="{{ $pembiayaandesa->anggaran }}">
                    </div>
                    @error('anggaran')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Realisasi</label>
                        <input type="number" name="realisasi" id="" cols="30" rows="10"
                            class="form-control" placeholder="Realisasi" value="{{ $pembiayaandesa->realisasi }}">
                    </div>
                    @error('realisasi')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Selisih</label>
                        <input type="number" name="selisih" id="" cols="30" rows="10"
                            class="form-control" placeholder="Selisih" value="{{ $pembiayaandesa->selisih }}">
                    </div>
                    @error('selisih')
                        <small style="color:red">{{ $message }}</small>
                    @enderror
                    <div class="form-group">
                        <label for="">Jenis</label>
                        <select class="form-control" name="jenis">
                            <option value="Penerimaan Pembiayaan" @if ($pembiayaandesa->jenis === 'Penerimaan Pembiayaan') selected @endif>
                                Penerimaan Pembiayaan</option>
                            <option value="Pengeluaran Pembiayaan" @if ($pembiayaandesa->jenis === 'Pengeluaran Pembiayaan') selected @endif>
                                Pengeluaran Pembiayaan</option>
                            <option value="Total" @if ($pembiayaandesa->jenis === 'Total') selected @endif>
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
