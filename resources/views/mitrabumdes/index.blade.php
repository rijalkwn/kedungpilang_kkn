@extends('layouts.app')

@section('title', 'Mitra BUMDES')

@section('content')

    <div class="container">

        <a href="/admin/mitrabumdes/create" class="btn btn-primary mb-3">Tambah Data</a>

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
                        <th>Nama Usaha</th>
                        <th>Deskripsi</th>
                        <th>ROI</th>
                        <th>ROA</th>
                        <th>ROE</th>
                        <th>GPM</th>
                        <th>OPM</th>
                        <th>NPM</th>
                        <th>Valuasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($mitrabumdes as $mitrabumdes)
                        <tr>
                            <td>{{ $i++ }}</td>
                            <td>{{ $mitrabumdes->nama_usaha }}</td>
                            <td>{{ Str::words($mitrabumdes->deskripsi, 10, '...') }}</td>
                            <td>{{ $mitrabumdes->roi }}%</td>
                            <td>{{ $mitrabumdes->roa }}%</td>
                            <td>{{ $mitrabumdes->roe }}%</td>
                            <td>{{ $mitrabumdes->gpm }}%</td>
                            <td>{{ $mitrabumdes->opm }}%</td>
                            <td>{{ $mitrabumdes->npm }}%</td>
                            <td>{{ $mitrabumdes->valuasi }}</td>

                            <td>
                                <a href="{{ route('mitrabumdes.edit', $mitrabumdes->id) }}" class="btn btn-warning">Edit</a>
                                <br>

                                <form action="{{ route('mitrabumdes.destroy', $mitrabumdes->id) }}" method="POST">
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
