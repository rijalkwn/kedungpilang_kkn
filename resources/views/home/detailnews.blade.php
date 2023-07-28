@extends('home.layout.master')

@section('content')
    <section id="detail-news" class="detail-news" style="margin-top: -20px">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">{{ $news->title }}</h4>
                            <div class="row justify-content-center">
                                <div class="col-md-6 text-center">
                                    <img src="/image/{{ $news->image }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <p class="card-text text-justify" style="text-align: justify;">
                                        <small
                                            style="text-align: justify;">{{ $news->created_at->format('d F Y') }}</small><br>
                                        {{ $news->description }}
                                    </p>
                                </div>

                            </div>
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <a href="/berita" class="btn btn-primary">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Berita Lain</h5>
                            <ul class="list-group list-group-flush">
                                @foreach ($otherNews->slice(0, 6) as $other)
                                    <li class="list-group-item">
                                        <a href="/berita{{ $other->id }}">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img src="/image/{{ $other->image }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-md-8">
                                                    <p style="font-size: 12px; color:rgb(31, 179, 229)">
                                                        {{ Str::words($other->title, 7, '...') }}
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
