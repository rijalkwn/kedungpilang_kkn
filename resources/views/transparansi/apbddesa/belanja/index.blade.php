@extends('layouts.app')

@section('title', 'Data Belanja Desa')

@section('content')

    <div class="container">

        <a href="/admin/belanjadesa/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                    @foreach ($belanjadesa as $belanjadesa)
                        <tr>
                            <td>{{ $belanjadesa->kegiatan }}</td>
                            <td>{{ $belanjadesa->anggaran }}</td>
                            <td>{{ $belanjadesa->realisasi }}</td>
                            <td>{{ $belanjadesa->selisih }}</td>
                            <td>{{ $belanjadesa->jenis }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('belanjadesa.edit', $belanjadesa->id) }}"
                                        class="btn btn-warning mr-2">Edit</a>
                                    <form action="{{ route('belanjadesa.destroy', $belanjadesa->id) }}" method="POST">
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
