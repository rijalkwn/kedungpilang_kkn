@extends('layouts.app')

@section('title', 'Data Pembiayaan Desa')

@section('content')

    <div class="container">

        <a href="/admin/pembiayaandesa/create" class="btn btn-primary mb-3">Tambah Data</a>

        @if ($message = Session::get('message'))
            <div class="alert alert-success">
                <strong>Berhasil</strong>
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>Kegiatan</th>
                        <th>Anggaran</th>
                        <th>Realisasi</th>
                        <th>Selisih</th>
                        <th>Jenis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pembiayaandesa as $pembiayaandesa)
                        <tr>
                            <td>{{ $pembiayaandesa->kegiatan }}</td>
                            <td>{{ $pembiayaandesa->anggaran }}</td>
                            <td>{{ $pembiayaandesa->realisasi }}</td>
                            <td>{{ $pembiayaandesa->selisih }}</td>
                            <td>{{ $pembiayaandesa->jenis }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('pembiayaandesa.edit', $pembiayaandesa->id) }}"
                                        class="btn btn-warning mr-2">Edit</a>
                                    <form action="{{ route('pembiayaandesa.destroy', $pembiayaandesa->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
