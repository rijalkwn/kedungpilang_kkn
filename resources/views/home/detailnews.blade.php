@extends('home.layout.master')

@section('content')
    <section id="detail-news" class="detail-news">
        <div class="container" data-aos="fade-up">
            <div class="section-title" style="margin-top: 70px">
                <h2>Detail Berita</h2>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <img src="/image/{{ $news->image }}" alt="" class="img-fluid">
                        <div class="card-body">
                            <h4 class="card-title">{{ $news->title }}</h4>
                            <p class="card-text">{{ $news->description }}</p>
                            <a href="{{ route('news.index') }}" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
