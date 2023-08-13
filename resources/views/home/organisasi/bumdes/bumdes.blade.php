@extends('home.layout.master')

@section('content')
    <style>
        /* Define the width for each column */
        th:nth-child(1),
        td:nth-child(1) {
            width: 5%;
        }

        th:nth-child(2),
        td:nth-child(2) {
            width: 30%;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 20%;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-family: Arial, sans-serif;
        }

        th,
        td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #46a584;
        }

        tr:hover {
            background-color: #3fbbc0;
        }
    </style>
    <div class="section-title mt-4">
        <h2>STRUKTUR BADAN USAHA MILIK DESA</h2>
    </div>
    <div class="row ms-4 me-4">
        <div class="col-lg-8 m-auto">
            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th>No</th>
                        <th style="text-align: center">Nama</th>
                        <th style="text-align: center">Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($bumdes->isEmpty())
                        <tr>
                            <td colspan="3" style="text-align: center">Data tidak ada</td>
                        </tr>
                    @else
                        @foreach ($bumdes as $pkk)
                            <tr>
                                <td style="text-align: center">{{ $loop->iteration }}</td>
                                <td>{{ $bumdes->nama }}</td>
                                <td>{{ $bumdes->jabatan }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
