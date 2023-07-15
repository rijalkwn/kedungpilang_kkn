@extends('home.layout.master')

@section('content')
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title" style="margin-top: 70px">
                <h2>Berita Terbaru Desa Kedungpilang</h2>
            </div>

            <div class="row">
                @foreach ($news as $news)
                    <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="/image/{{ $news->image }}" alt="" class="img-fluid">
                            </div>
                            <br>
                            <div class="text-center">
                                <h4>{{ $news->title }}</h4>
                            </div>
                            <p class="description">{{ substr($news->description, 0, 80) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                <a href="/berita/{{ $news->id }}" style="text-decoration: none; color: inherit;">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="/image/{{ $news->image }}" alt="" class="img-fluid">
                        </div>
                        <br>
                        <div class="text-center">
                            <h4>{{ $news->title }}</h4>
                        </div>
                        <p class="description">{{ substr($news->description, 0, 80) }}</p>
                    </div>
                </a>
            </div>


        </div>
    </section><!-- End Featured Services Section -->
@endsection
