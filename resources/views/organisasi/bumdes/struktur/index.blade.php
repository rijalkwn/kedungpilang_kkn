@extends('layouts.app')

@section('title', 'Informasi Data Bumdes')

@section('content')

    <div class="container">

        <a href="/admin/bumdes/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                    @foreach ($bumdes as $bumdes)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $bumdes->nama }}</td>
                            <td>{{ $bumdes->jabatan }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('bumdes.edit', $bumdes->id) }}" class="btn btn-warning mr-2">Edit</a>
                                    <form action="{{ route('bumdes.destroy', $bumdes->id) }}" method="POST">
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
