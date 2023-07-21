@extends('home.layout.master')

@section('content')
    <section id="gallery" class="gallery">
        <div class="container" data-aos="fade-up">

            <div class="section-title" style="margin-top: 70px">
                <h2>Galeri Desa Kedungpilang</h2>
            </div>

            <div class="gallery-slider swiper">

                <div class="swiper-wrapper align-items-center">
                    @foreach ($galeri as $index => $galeri)
                        <div class="swiper-slide{{ $index === 0 ? 'active' : '' }}">
                            <a class="gallery-lightbox" href="image/{{ $galeri->image }}"> <img
                                    src="image/{{ $galeri->image }}" class="img-fluid" alt=""> </a>

                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination">
                </div>
            </div>

        </div>
    </section><!-- End Gallery Section -->
@endsection
