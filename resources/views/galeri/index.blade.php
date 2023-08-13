@extends('layouts.app')

@section('title', 'Data Galeri Desa Kedungpilang')

@section('content')

    <div class="container">

        <a href="/admin/galeri/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($galeri as $galeri)
                        <tr>
                            <td>{{ $i++ }}</td>

                            <td>
                                <img src="/image/{{ $galeri->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-warning mr-2">Edit</a>
                                    <form action="{{ route('galeri.destroy', $galeri->id) }}" method="POST">
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
