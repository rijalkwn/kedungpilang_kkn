@extends('home.layout.master')

@section('content')
    <div class="section-title mt-4">
        <h2>Info Ketersediaan Pupuk</h2>
    </div>

    <div class="pupuk-list">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Merek Pupuk</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Stok</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pupuk as $pupuk)
                                <tr>
                                    <td class="text-center">{{ $pupuk->merek_pupuk }}</td>
                                    <td class="text-center">{{ $pupuk->harga }}</td>
                                    <td class="text-center">{{ $pupuk->stok }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
