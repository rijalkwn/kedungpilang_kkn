@extends('home.layout.master')

@section('content')
    <div class="section-title mt-4">
        <h2>Info Penyewaan Alat</h2>
    </div>

    <div class="pupuk-list">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th class="text-center">Alat</th>
                                <th class="text-center">Harga<i style="color: red">/ Hari</i></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penyewaan as $penyewaan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td class="text-center">{{ $penyewaan->alat }}</td>
                                    <td class="text-center">{{ $penyewaan->harga }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 ms-4">
                <p>Untuk pemesanan dapat dilakukan dengan menekan tombol di bawah ini:</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 ms-4">
                <a href="https://wa.me/6281234567890" class="btn btn-success mb-3">
                    <i class="fab fa-whatsapp"></i> WhatsApp
                </a>
            </div>
        </div>
    </div>
@endsection
