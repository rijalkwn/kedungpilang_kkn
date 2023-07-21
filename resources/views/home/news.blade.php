@extends('home.layout.master')

@section('content')
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">

            <div class="section-title" style="margin-top: 70px">
                <h2>Berita Terbaru Desa Kedungpilang</h2>
            </div>

            <div class="row">
                @foreach ($news as $newsItem)
                    <div class="col-md-3 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                        <a href="/berita{{ $newsItem->id }}" style="text-decoration: none; color: inherit;">
                            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                                <div class="member-img">
                                    <img src="/image/{{ $newsItem->image }}" alt="" class=""
                                        style="width: 300px; height: 200px; object-fit: cover;">
                                </div>
                                <br>
                                <div class="text" style="align-items: justify">
                                    <h6>{{ Str::words($newsItem->title, 8, '...') }}</h6>
                                </div>
                                <p class="description">{{ Str::words($newsItem->description, 10, '...') }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            {{-- <div class="text-center mt-4">
                {{ $news->links() }}
            </div> --}}
        </div>
    </section><!-- End Featured Services Section -->
@endsection
