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
            width: 40%;
        }

        th:nth-child(3),
        td:nth-child(3) {
            width: 40%;
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
        <h2>Info Penyewaan Alat</h2>
    </div>
    <div class="row ms-4 me-4">
        <div class="col-lg-8 m-auto">
            <table class="table table-bordered table-striped mt-4">
                <thead>
                    <tr>
                        <th style="text-align: center">No</th>
                        <th style="text-align: center">Alat</th>
                        <th style="text-align: center">Harga <i style="color: red">/ Hari</i></th>
                    </tr>
                </thead>
                <tbody>
                    @if ($penyewaan->isEmpty())
                        <tr>
                            <td colspan="3" style="text-align: center">Data tidak ada</td>
                        </tr>
                    @else
                        @foreach ($penyewaan as $penyewaanItem)
                            <tr>
                                <td style="text-align: center">{{ $loop->iteration }}</td>
                                <td>{{ $penyewaanItem->alat }}</td>
                                <td>{{ $penyewaanItem->harga }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8 m-auto">
            <p style="text-align: center">Untuk informasi lebih lanjut mengenai penyewaan, silahkan hubungi kami melalui <a
                    href="https://wa.me/6285861493468" target="_blank" class="btn btn-success">WhatsApp</a></p>
        </div>
    @endsection
