@extends('layouts.app')

@section('title', 'Informasi Data Linmas')

@section('content')

    <div class="container">

        <a href="/admin/linmas/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($linmas as $linmas)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $linmas->nama }}</td>
                            <td>{{ $linmas->jabatan }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('linmas.edit', $linmas->id) }}" class="btn btn-warning mr-2">Edit</a>
                                    <form action="{{ route('linmas.destroy', $linmas->id) }}" method="POST">
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
