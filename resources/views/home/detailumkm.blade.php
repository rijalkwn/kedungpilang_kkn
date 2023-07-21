@extends('home.layout.master')

@section('content')
    <section id="detail-news" class="detail-news" style="margin-top: -20px">
        <div class="container" data-aos="fade-up">
            <div class="row mx-auto">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ $umkm->title }}</h4>
                            <div class="row justify-content-center">
                                <div class="col-md-6 text-center">
                                    <img src="/image/{{ $umkm->image }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <p class="card-text text-justify" style="text-align: justify;">
                                        {{ $umkm->description }}
                                    </p>
                                </div>

                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <a href="/umkm" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">UMKM Lain</h5>
                            <ul class="list-group list-group-flush">
                                @foreach ($otherUmkm as $other)
                                    <li class="list-group-item">
                                        <a href="/berita{{ $other->id }}">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img src="/image/{{ $other->image }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-md-7">
                                                    <p style="font-size: 10px; color:rgb(31, 179, 229)">{{ $other->title }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
