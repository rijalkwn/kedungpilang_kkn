@extends('layouts.app')

@section('title', 'Informasi Data Karang Taruna')

@section('content')

    <div class="container">

        <a href="/admin/karangtaruna/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                    @foreach ($karangtaruna as $karangtaruna)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $karangtaruna->nama }}</td>
                            <td>{{ $karangtaruna->jabatan }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('karangtaruna.edit', $karangtaruna->id) }}"
                                        class="btn btn-warning mr-2">Edit</a>
                                    <form action="{{ route('karangtaruna.destroy', $karangtaruna->id) }}" method="POST">
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
