@extends('layouts.app')

@section('title', 'Informasi Pupuk BUMDES')

@section('content')

    <div class="container">

        <a href="/admin/pupuk/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                        <th>Merek Pupuk</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($pupuk as $pupuk)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $pupuk->merek_pupuk }}</td>
                            <td>{{ $pupuk->harga }}</td>
                            <td>{{ $pupuk->stok }} sak</td>
                            <td>
                                <a href="{{ route('pupuk.edit', $pupuk->id) }}" class="btn btn-warning">Edit</a>
                                <br>

                                <form action="{{ route('pupuk.destroy', $pupuk->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <br> <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
