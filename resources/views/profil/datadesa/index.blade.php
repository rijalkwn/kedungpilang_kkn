@extends('layouts.app')

@section('title', 'Data Desa Kedungpilang')

@section('content')

    <div class="container">

        <a href="/admin/datadesa/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                        <th>Penjelasan</th>
                        <th>File</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($datadesa as $datadesa)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $datadesa->judul }}</td>
                            <td>{{ $datadesa->penjelasan }}</td>
                            <td><a href="{{ asset('files/datadesa/' . $datadesa->file) }}" class="btn-small btn-success btn"
                                    target="_blank">Lihat File</a></td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('datadesa.edit', $datadesa->id) }}"
                                        class="btn btn-warning mr-2">Edit</a>
                                    <form action="{{ route('datadesa.destroy', $datadesa->id) }}" method="POST">
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
