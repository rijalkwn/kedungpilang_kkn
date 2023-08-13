@extends('layouts.app')

@section('title', 'Informasi Penyewaan')

@section('content')

    <div class="container">

        <a href="/admin/penyewaan/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                        <th>Alat</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($penyewaan as $penyewaan)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $penyewaan->alat }}</td>
                            <td>{{ $penyewaan->harga }}</td>
                            <td>
                                <div class="d-flex">
                                    <a href="{{ route('penyewaan.edit', $penyewaan->id) }}"
                                        class="btn btn-warning mr-2">Edit</a>
                                    <form action="{{ route('penyewaan.destroy', $penyewaan->id) }}" method="POST">
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
