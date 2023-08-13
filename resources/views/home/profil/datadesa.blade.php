@extends('home.layout.master')

@section('content')
    <div class="section-title mt-4">
        <h2>Data Desa Kedungpilang</h2>
    </div>
    <div class="row ms-4 me-4">
        <div class="col-lg-10 m-auto">
            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th style="text-align: center">Judul</th>
                        <th style="text-align: center">Penjelasan</th>
                        <th style="text-align: center"></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($datadesa->isEmpty())
                        <tr>
                            <td colspan="3" style="text-align: center">Data tidak ada</td>
                        </tr>
                    @else
                        @foreach ($datadesa as $datadesa)
                            <tr>
                                <td>{{ $datadesa->judul }}</td>
                                <td>{{ $datadesa->penjelasan }}</td>
                                <td style="text-align: center">
                                    <a href="{{ asset('files/datadesa/' . $datadesa->file) }}" target="_blank"
                                        class="btn btn-success">Lihat File</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
