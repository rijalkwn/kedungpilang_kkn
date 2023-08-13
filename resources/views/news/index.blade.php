@extends('layouts.app')

@section('title', 'Data Berita Desa Kedungpilang')

@section('content')

    <div class="container">

        <a href="/admin/news/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($news as $news)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $news->title }}</td>
                            <td>
                                <img src="/image/{{ $news->image }}" alt="" class="img-fluid" width="90">
                            </td>
                            <td class="fit-content">
                                <div class="d-flex">
                                    <a href="{{ route('news.edit', $news->id) }}" class="btn btn-warning mr-2">Edit</a>
                                    <form action="{{ route('news.destroy', $news->id) }}" method="POST">
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
