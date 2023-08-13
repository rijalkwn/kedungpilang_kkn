@extends('layouts.app')

@section('title', 'Data UMKM Desa Kedungpilang')

@section('content')

    <div class="container">

        <a href="/admin/umkm/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                        <th>No</th>
                        <th>Judul</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($umkm as $umkm)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $umkm->title }}</td>
                            <td>{{ Str::words($umkm->description, 8, '...') }}</td>
                            <td>
                                <img src="/image/{{ $umkm->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('umkm.edit', $umkm->id) }}" class="btn btn-warning mr-2">Edit</a>
                                    <form action="{{ route('umkm.destroy', $umkm->id) }}" method="POST">
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
